<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre_emploi;
use App\Models\Type_offre;
use App\Models\Type_contrat;
use App\Models\Ville;
use App\Models\Categorie_service;
use App\Models\Recrutement_offre;
use App\Models\Professionnel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector; 
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\Offre_emploi_recrutement;
use App\Models\Acteur;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homePage()
    {
        $data['title'] = 'Accueil';
        $data['menu'] = 'accueil';

        try {
            $data['categorie_services'] = Categorie_service::where(['statut' => 1])
                ->orderBy('id', 'desc')->get();
            $data['acteurs'] = Acteur::orderBy('id', 'asc')->get();
        } catch (\Throwable $e) {
            Log::warning('homePage: erreur BDD (affichage sans données)', ['message' => $e->getMessage()]);
            $data['categorie_services'] = collect([]);
            $data['acteurs'] = collect([]);
        }

        return view('home', $data);
    }

    public function features()
    {
        $data['title'] = 'Fonctionnalités';
        $data['menu'] = 'features';
        return view('features', $data);
    }
    public function modules()
    {
        $data['title'] = 'Modules';
        $data['menu'] = 'modules';
        return view('modules', $data);
    }
    public function acteurs()
    {
        $data['title'] = 'Acteurs';
        $data['menu'] = 'acteurs';
        return view('acteurs', $data);
    }
    public function partenaires()
    {
        $data['title'] = 'Partenaires';
        $data['menu'] = 'partenaires';
        return view('partners', $data);
    }
    public function testimonials()
    {
        $data['title'] = 'Témoignages';
        $data['menu'] = 'testimonials';
        return view('testimonials', $data);
    }
    public function download()
    {
        $data['title'] = 'Télécharger';
        $data['menu'] = 'download';
        return view('download', $data);
    }
    public function contact()
    {
        $data['title'] = 'Contact';
        $data['menu'] = 'contact';
        return view('contact', $data);
    }
    public function faq()
    {
        $data['title'] = 'FAQ';
        $data['menu'] = 'faq';
        return view('faq', $data);
    }

    public function indexOffresEmploi()
    {
        $data['title'] = 'Offres d\'emploi';
        $data['menu'] = 'offre';

        $data['offres'] = Offre_emploi::orderBy('id', 'desc')
        ->with('type_contrat')
        ->with('type_offre')
        ->with('ville')
        ->get();
        $data['types_contrats'] = Type_contrat::orderBy('id', 'desc')->get();
        $data['types_offres'] = Type_offre::orderBy('id', 'desc')->get();
        $data['villes'] = Ville::orderBy('id', 'asc')->get();

        return view('offres', $data);
    }

    public function searchOffres(Request $request)
    {
        $data['title'] = 'Recherche d\'offres d\'emploi';
        $data['menu'] = 'offre';

        // Récupérer les paramètres de recherche
        $keywords = $request->get('keywords');
        $typeOffreId = $request->get('type_offre_id');
        $villeId = $request->get('ville_id');
        $typeContratId = $request->get('type_contrat_id');

        // Construire la requête de base
        $query = Offre_emploi::with(['type_contrat', 'type_offre', 'ville']);

        // Appliquer les filtres
        if (!empty($keywords)) {
            $query->where('description', 'LIKE', '%' . $keywords . '%');
        }

        if (!empty($typeOffreId)) {
            $query->where('type_offre_id', $typeOffreId);
        }

        if (!empty($villeId)) {
            $query->where('ville_id', $villeId);
        }

        if (!empty($typeContratId)) {
            $query->where('type_de_contrat_id', $typeContratId);
        }

        // Récupérer les résultats
        $data['offres'] = $query->orderBy('id', 'desc')->get();
        
        // Récupérer les données pour les filtres
        $data['types_contrats'] = Type_contrat::orderBy('id', 'desc')->get();
        $data['types_offres'] = Type_offre::orderBy('id', 'desc')->get();
        $data['villes'] = Ville::orderBy('id', 'asc')->get();

        // Conserver les valeurs de recherche pour les afficher dans le formulaire
        $data['searchParams'] = $request->only(['keywords', 'type_offre_id', 'ville_id', 'type_contrat_id']);

        return view('offres', $data);
    }

    public function showOffreDetails($id)
    {
        $data['title'] = 'Détails de l\'offre';
        $data['menu'] = 'offre';

        // Récupérer l'offre avec toutes ses relations
        $offre = Offre_emploi::with(['type_contrat', 'type_offre', 'ville'])
            ->findOrFail($id);

        // Traiter les données pour l'affichage
        $data['offre'] = [
            'id' => $offre->id,
            'titre' => Str::limit($offre->description, 50),
            'departement' => $offre->type_offre->libelle ?? 'Non spécifié',
            'type_contrat' => $offre->type_contrat->libelle ?? 'CDI',
            'localisation' => $offre->ville->libelle ?? 'Abidjan',
            'experience' => $offre->experience ?? 'Non spécifié',
            'salaire' => $offre->salaire ?? 'À négocier',
            'description' => $offre->description,
            'missions' => !empty($offre->missions) ? explode('; ', $offre->missions) : [],
            'competences' => !empty($offre->competence_requises) ? explode('; ', $offre->competence_requises) : [],
            'profil_recherche' => !empty($offre->profil_rechercher) ? explode('; ', $offre->profil_rechercher) : [],
            'avantages' => !empty($offre->avantages) ? explode('; ', $offre->avantages) : []
        ];

        return view('offre-details', $data);
    }

    public function showCandidatureForm(Request $request)
    {
        $data['title'] = 'Formulaire de candidature - TOOAUTO SARL';
        $data['poste'] = $request->get('poste', '');
        return view('candidature-form', $data);
    }

    public function storeCandidature(Request $request)
    {
        Log::info('=== DÉBUT storeCandidature ===');
        Log::info('Données reçues:', $request->all());
        Log::info('Fichiers reçus:', [
            'cv' => $request->hasFile('cv') ? $request->file('cv')->getClientOriginalName() : 'Aucun',
            'photo' => $request->hasFile('photo') ? $request->file('photo')->getClientOriginalName() : 'Aucun',
            'lm' => $request->hasFile('lm') ? $request->file('lm')->getClientOriginalName() : 'Aucun',
        ]);

        try {
            // Validation des données
            Log::info('Début de la validation...');
            $photoRules = ['nullable'];
            // Ne valider la photo que si un fichier a bien été uploadé (évite "The photo failed to upload" quand l'upload a échoué côté PHP)
            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $photoRules[] = 'image';
                $photoRules[] = 'mimes:jpeg,png,jpg,gif';
                $photoRules[] = 'max:2048';
            }
            $request->validate([
                'nom' => 'required|string|max:100',
                'prenoms' => 'required|string|max:200',
                'email' => 'required|email|max:100',
                'mobile' => 'required|string|max:20',
                'commune' => 'required|string|max:100',
                'photo' => $photoRules,
                'lm' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // 5MB max, optionnel
                'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
                'poste' => 'nullable|string|max:100',
            ]);
            Log::info('Validation réussie');

            // Vérifier que les dossiers existent
            $cvDir = public_path('uploads/cv');
            $photoDir = public_path('uploads/photos');
            if (!file_exists($cvDir)) {
                Log::warning('Le dossier uploads/cv n\'existe pas, création...');
                mkdir($cvDir, 0755, true);
            }
            if (!file_exists($photoDir)) {
                Log::warning('Le dossier uploads/photos n\'existe pas, création...');
                mkdir($photoDir, 0755, true);
            }

            // Gestion du téléchargement du CV
            Log::info('Traitement du CV...');
            if ($request->hasFile('cv')) {
                $file = $request->file('cv');
                $cvFileName = time() . '_cv_' . $file->getClientOriginalName();
                Log::info('Nom du fichier CV:', ['filename' => $cvFileName]);
                $file->move($cvDir, $cvFileName);
                Log::info('CV téléchargé avec succès:', ['path' => $cvDir . '/' . $cvFileName]);
            } else {
                Log::error('Le fichier CV est manquant');
                return back()->with('error', 'Le fichier CV est requis.');
            }

            // Gestion du téléchargement de la photo (optionnel)
            Log::info('Traitement de la photo...');
            $photoFileName = null;
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $photoFileName = time() . '_photo_' . $file->getClientOriginalName();
                Log::info('Nom du fichier photo:', ['filename' => $photoFileName]);
                $file->move($photoDir, $photoFileName);
                Log::info('Photo téléchargée avec succès:', ['path' => $photoDir . '/' . $photoFileName]);
            } else {
                Log::info('Aucune photo fournie (optionnel)');
            }

            // Gestion du téléchargement de la lettre de motivation (optionnel)
            Log::info('Traitement de la lettre de motivation...');
            $lmFileName = null;
            if ($request->hasFile('lm')) {
                $file = $request->file('lm');
                $lmFileName = time() . '_lm_' . $file->getClientOriginalName();
                Log::info('Nom du fichier LM:', ['filename' => $lmFileName]);
                $file->move($cvDir, $lmFileName);
                Log::info('Lettre de motivation téléchargée avec succès:', ['path' => $cvDir . '/' . $lmFileName]);
            } else {
                Log::info('Aucune lettre de motivation fournie (optionnel)');
            }

            // Création de la candidature
            Log::info('Préparation des données pour la base de données...');
            
            // Vérifier que toutes les valeurs requises sont présentes
            $commune = trim($request->commune ?? '');
            if (empty($commune)) {
                Log::error('Le champ commune est vide ou manquant', [
                    'commune_value' => $request->commune,
                    'commune_type' => gettype($request->commune),
                ]);
                return back()->with('error', 'Le champ commune de résidence est requis.');
            }
            
            Log::info('Valeurs vérifiées:', [
                'commune' => $commune,
                'commune_length' => strlen($commune),
                'photoFileName' => $photoFileName ?? 'NULL (optionnel)',
                'photoFileName_length' => $photoFileName ? strlen($photoFileName) : 0,
                'cvFileName' => $cvFileName,
            ]);
            
            $candidatureData = [
                'nom' => trim($request->nom),
                'prenoms' => trim($request->prenoms),
                'email' => trim($request->email),
                'mobile' => trim($request->mobile),
                'commune' => $commune,
                'photo' => $photoFileName ?? null,
                'cv' => $cvFileName,
            ];
            
            // Ajouter la lettre de motivation si fournie
            if ($lmFileName) {
                $candidatureData['lm'] = $lmFileName;
            }
            
            // Ajouter le poste si fourni
            if ($request->poste) {
                $candidatureData['poste'] = $request->poste;
            }
            
            Log::info('Données à insérer (avant filtrage):', $candidatureData);
            
            // Vérifier que tous les champs requis sont présents
            $requiredFields = ['nom', 'prenoms', 'email', 'mobile', 'commune', 'cv'];
            foreach ($requiredFields as $field) {
                if (!isset($candidatureData[$field]) || empty($candidatureData[$field])) {
                    Log::error("Le champ requis '$field' est manquant ou vide", [
                        'field' => $field,
                        'value' => $candidatureData[$field] ?? 'NON DÉFINI',
                    ]);
                    return back()->with('error', "Le champ $field est requis.");
                }
            }
            
            Log::info('Tous les champs requis sont présents');
            
            // Vérifier une dernière fois que les données sont correctes
            Log::info('Vérification finale des données:', [
                'commune' => isset($candidatureData['commune']) ? $candidatureData['commune'] : 'MANQUANT',
                'cv' => isset($candidatureData['cv']) ? $candidatureData['cv'] : 'MANQUANT',
                'count' => count($candidatureData),
            ]);
            
            Log::info('Tentative de création dans la base de données...');
            Log::info('Données complètes à insérer:', $candidatureData);
            
            // Utiliser une requête SQL brute avec paramètres liés pour forcer l'insertion de tous les champs
            $now = now();
            
            Log::info('Valeurs préparées pour SQL:', [
                'nom' => $candidatureData['nom'],
                'prenoms' => $candidatureData['prenoms'],
                'email' => $candidatureData['email'],
                'mobile' => $candidatureData['mobile'],
                'commune' => $candidatureData['commune'],
                'photo' => $candidatureData['photo'] ?? 'NULL (optionnel)',
                'cv' => $candidatureData['cv'],
                'lm' => $candidatureData['lm'] ?? null,
                'poste' => $candidatureData['poste'] ?? null,
            ]);
            
            // Construire la requête SQL avec paramètres liés pour plus de sécurité
            // Inclure photo même si elle est null (la colonne doit accepter NULL)
            $sql = "INSERT INTO `recrutement_offres` 
                    (`nom`, `prenoms`, `email`, `mobile`, `commune`, `photo`, `cv`, `lm`, `poste`, `created_at`, `updated_at`) 
                    VALUES 
                    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            // Préparer les valeurs dans l'ordre de la requête SQL
            $values = [
                $candidatureData['nom'],
                $candidatureData['prenoms'],
                $candidatureData['email'],
                $candidatureData['mobile'],
                $candidatureData['commune'],
                $candidatureData['photo'] ?? null, // Photo optionnelle
                $candidatureData['cv'],
                $candidatureData['lm'] ?? null,
                $candidatureData['poste'] ?? null,
                $now,
                $now,
            ];
            
            Log::info('Requête SQL à exécuter:', ['sql' => $sql, 'values_count' => count($values)]);
            Log::info('Valeurs à insérer:', $values);
            
            // Exécuter la requête SQL brute avec paramètres liés
            DB::insert($sql, $values);
            
            // Récupérer l'ID de la dernière insertion
            $candidatureId = DB::getPdo()->lastInsertId();
            
            Log::info('Candidature créée avec succès via SQL brut avec paramètres liés:', ['id' => $candidatureId]);
            
            // Récupérer l'instance du modèle pour le retour
            $candidature = Recrutement_offre::find($candidatureId);

            // Envoyer un SMS de confirmation au candidat
            try {
                Log::info('Tentative d\'envoi de SMS au candidat...', [
                    'mobile' => $candidatureData['mobile'],
                    'nom' => $candidatureData['nom'],
                    'prenoms' => $candidatureData['prenoms'],
                ]);
                
                $message = "Bonjour {$candidatureData['prenoms']} {$candidatureData['nom']}, votre candidature a été reçue avec succès. Nous vous contacterons bientôt. Merci - TOOAUTO SARL";
                
                $smsResponse = $this->sendSmsMtarget($message, $candidatureData['mobile']);
                
                Log::info('SMS envoyé avec succès:', [
                    'mobile' => $candidatureData['mobile'],
                    'response' => $smsResponse,
                ]);
            } catch (\Exception $smsException) {
                // Ne pas bloquer l'enregistrement si l'envoi SMS échoue
                Log::warning('Erreur lors de l\'envoi du SMS (non bloquant):', [
                    'mobile' => $candidatureData['mobile'],
                    'error' => $smsException->getMessage(),
                ]);
            }

            Log::info('=== FIN storeCandidature (SUCCÈS) ===');
            return back()->with('success', 'Votre candidature a été envoyée avec succès ! Nous vous contacterons bientôt.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Erreur de validation:', [
                'errors' => $e->errors(),
                'message' => $e->getMessage(),
            ]);
            return back()->withErrors($e->errors())->withInput();
            
        } catch (\Exception $e) {
            Log::error('=== ERREUR dans storeCandidature ===');
            Log::error('Message d\'erreur:', ['message' => $e->getMessage()]);
            Log::error('Fichier:', ['file' => $e->getFile()]);
            Log::error('Ligne:', ['line' => $e->getLine()]);
            Log::error('Trace complète:', ['trace' => $e->getTraceAsString()]);
            
            // Supprimer les fichiers en cas d'erreur
            if (isset($cvFileName) && file_exists(public_path('uploads/cv/' . $cvFileName))) {
                Log::info('Suppression du fichier CV en cas d\'erreur:', ['file' => $cvFileName]);
                unlink(public_path('uploads/cv/' . $cvFileName));
            }
            if (isset($photoFileName) && file_exists(public_path('uploads/photos/' . $photoFileName))) {
                Log::info('Suppression du fichier photo en cas d\'erreur:', ['file' => $photoFileName]);
                unlink(public_path('uploads/photos/' . $photoFileName));
            }
            if (isset($lmFileName) && file_exists(public_path('uploads/cv/' . $lmFileName))) {
                Log::info('Suppression du fichier LM en cas d\'erreur:', ['file' => $lmFileName]);
                unlink(public_path('uploads/cv/' . $lmFileName));
            }
            
            Log::error('=== FIN storeCandidature (ERREUR) ===');
            return back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre candidature. Veuillez réessayer. Message: ' . $e->getMessage());
        }
    }

    /**
     * Envoie un SMS via l'API MTarget
     * 
     * @param string $message Le message à envoyer
     * @param string $msisdn Le numéro de téléphone (format international)
     * @param string $sender L'expéditeur (par défaut: 'TOO AUTO')
     * @return string La réponse de l'API
     * @throws \Exception En cas d'erreur
     */
    private function sendSmsMtarget($message, $msisdn, $sender = 'TOO AUTO')
    {
        // URL de l'API MTarget
        $url = 'https://api-public-2.mtarget.fr/messages';
        
        // Vérifier et ajouter le signe '+' si nécessaire
        if (strpos($msisdn, '+') !== 0) {
            $msisdn = '+' . $msisdn;
        }
        
        // Paramètres d'authentification et de message
        $postData = http_build_query([
            'username' => 'bwantech',
            'password' => 'x7jyKG0IJRNH',
            'msisdn' => $msisdn,
            'msg' => $message,
            'sender' => $sender
        ]);

        // Initialisation de cURL
        $ch = curl_init();

        // Configuration des options cURL
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,  // Pour récupérer la réponse
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
            CURLOPT_SSL_VERIFYPEER => false, // Désactiver la vérification SSL pour les tests
            CURLOPT_TIMEOUT => 30, // Timeout de 30 secondes
        ]);

        // Exécution de la requête
        $response = curl_exec($ch);

        // Gestion des erreurs
        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new \Exception("Erreur cURL : " . $error);
        }

        // Récupération du code de statut HTTP
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        // Fermeture de la session cURL
        curl_close($ch);

        // Vérification du code de statut HTTP
        if ($httpCode !== 200) {
            throw new \Exception("Erreur HTTP : " . $httpCode . " - Réponse : " . $response);
        }

        return $response;
    }

    public function recrutements()
    {
        $data['title'] = 'Recrutements - TOOAUTO SARL';
        return view('recrutements', $data);
    }

    public function postes()
    {
        $data['title'] = 'NOS OFFRES - TOOAUTO SARL';
        // Récupérer les postes depuis la base de données, triés par ordre
        $data['postes'] = Offre_emploi_recrutement::orderBy('ordre', 'asc')->get();
        return view('postes', $data);
    }
}