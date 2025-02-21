<?php return array(
	'invalid email address' => 'Le format d\'adresse de courriel est invalide',
	'company name required' => 'Le nom de la société contact est nécessaire',
	'company homepage invalid' => 'La valeur de la page d\'accueil n\'est pas une adresse URL valide',
	'username value required' => 'Le nom d\'utilisateur est nécessaire',
	'username must be unique' => 'Désolé, mais le nom d\'utilisateur sélectionné est déjà utilisé',
	'email value is required' => 'L\'adresse de courriel est nécessaire',
	'email address must be unique' => 'Désolé, mais l\'adresse de courriel est déjà utilisée',
	'company value required' => 'L\'utilisateur doit faire partie d\'une société contact',
	'password value required' => 'Le mot de passe est nécessaire',
	'passwords dont match' => 'Les mots de passe ne correspondent pas',
	'old password required' => 'L\'ancien mot de passe est nécessaire',
	'invalid old password' => 'L\'ancien mot de passe est invalide',
	'users must belong to a company' => 'Les contacts doivent appartenir à une société contact pour générer un utilisateur',
	'contact linked to user' => 'Le contact est lié à l\'utilisateur {0}',
	'invalid upload type' => 'Type de fichier invalide. Les types autorisés sont {0}',
	'invalid upload dimensions' => 'Dimensions d\'image incorrectes . La taille maximale est de {0}x{1} pixels\\n',
	'invalid upload size' => 'Taille d\'image incorrectes . La taille maximale est de {0}',
	'invalid upload failed to move' => 'Le déplacement du fichier chargé à échoué',
	'terms of services not accepted' => 'Pour créer votre compte, vous devez lire et accepter les termes du contrat',
	'failed to load company website' => 'le chargement du site à échoué. La société n\'a pas été trouvée\\n',
	'failed to load project' => 'Le chargement du contexte actif à échoué',
	'username value missing' => 'Saisissez votre nom d\'utilisateur',
	'password value missing' => 'Saisissez votre mot de passe',
	'invalid login data' => 'La connexion a échoué. Vérifiez vos paramètres de connexion et réessayez de nouveau.',
	'project name required' => 'Le nom de l\'espace de travail est nécessaire',
	'project name unique' => 'Le nom de l\'espace de travail doit être unique',
	'message title required' => 'Le titre est nécessaire',
	'message title unique' => 'Le titre doit être unique dans cet espace de travail',
	'message text required' => 'Le texte est nécessaire',
	'comment text required' => 'Le texte du commentaire est nécessaire',
	'milestone name required' => 'Le nom de l\'étape est nécessaire',
	'milestone due date required' => 'La date de remise de l\'étape est nécessaire',
	'task list name required' => 'Le nom de la tâche est nécessaire',
	'task list name unique' => 'Le nom de la tâche doit être unique pour cet espace de travail',
	'task title required' => 'Le titre de la tâche est nécessaire',
	'task text required' => 'Le texte de la tâche est nécessaire',
	'event subject required' => 'L\'objet de l\'évènement est nécessaire',
	'event description maxlength' => 'La description doit contenir moins de3000caractères',
	'event subject maxlength' => 'L\'objet doit contenir moins de100caractères',
	'form name required' => 'Le nom du formulaire est nécessaire',
	'form name unique' => 'Le nom du formulaire doit être unique',
	'form success message required' => 'La note de succès est nécessaire',
	'form action required' => 'L\'action du formulaire est nécessaire',
	'project form select message' => 'Choisissez une note',
	'project form select task lists' => 'Choisissez une tâche',
	'form content required' => 'Remplissez du contenu dans le champ texte',
	'folder name required' => 'Le nom du dossier est nécessaire',
	'folder name unique' => 'Le nom du dossier doit être unique pour ce contexte',
	'folder id required' => 'Choisissez un dossier',
	'filename required' => 'Le nom du fichier est nécessaire',
	'file revision file_id required' => 'La révision doit être lié à un fichier',
	'file revision filename required' => 'Le nom du fichier est nécessaire',
	'file revision type_string required' => 'Type de fichier inconnu',
	'test mail recipient required' => 'L\'adresse du destinataire est nécessaire\\n',
	'test mail recipient invalid format' => 'adresse du destinataire invalide',
	'test mail message required' => 'Le message du courriel est nécessaire',
	'massmailer subject required' => 'L\'objet du message est nécessaire',
	'massmailer message required' => 'Le corps du message est nécessaire',
	'massmailer select recepients' => 'Choisissez les utilisateurs qui recevront ce message',
	'mail account name required' => 'Le nom du compte est nécessaire',
	'mail account id required' => 'L\'Id du compte est nécessaire',
	'mail account server required' => 'Le serveur est nécessaire',
	'mail account password required' => 'Le mot-de-passe est nécessaire',
	'session expired error' => 'Faute d\'activité, la session a expiré. Vous devez vous reconnecter.',
	'unimplemented type' => 'Type non implémenté',
	'unimplemented action' => 'Action non implémentée',
	'workspace own parent error' => 'Un Espace de Travail ne peut être son propre parent',
	'task own parent error' => 'Une tâche ne peut être son propre parent',
	'task child of child error' => 'Une tâche ne peut l\'enfant de ses descendants',
	'chart title required' => 'Le titre du graphique est nécessaire',
	'chart title unique' => 'Le titre du graphique doit être unique.',
	'must choose at least one workspace error' => 'Vous devez choisir au moins un Espace de Travail où placer cet objet.',
	'user has contact' => 'Il y a un contact déjà affecté à cet utilisateur',
	'maximum number of users reached error' => 'Le nombre maximum d\'utilisateurs a été atteint',
	'maximum number of users exceeded error' => 'Le nombre maximum d\'utilisateurs a été dépassé. L\'application ne pourra plus fonctionner tant que ce problème ne sera pas résolu.',
	'maximum disk space reached' => 'Vos quotas de disque sont pleins.\\nSupprimer quelques objets avant d\'en ajouter de nouveaux, ou contacter le support pour autoriser plus d\'utilisateurs.',
	'error db backup' => 'Erreur en créant la sauvegarde de la base de données. Vérifier la constante MYSQLDUMP_COMMAND.',
	'error create backup folder' => 'Erreur en créant la sauvegarde du dossier. Impossible de terminer la sauvegarde',
	'error delete backup' => 'Erreur en supprimant la sauvegarde de la base de données,',
	'success delete backup' => 'La sauvegarde a été supprimée',
	'name must be unique' => 'Désolé, mais le nom sélectionné est déjà utilisé',
	'success db backup' => 'La sauvegarde a été créée.',
	'not implemented' => 'Non implémenté',
	'send mail error' => 'Erreur lors de l\'envoi du message. Probablement de mauvais paramètres SMTP.',
	'email address already exists' => 'Cette adresse de messagerie est déjà utilisée.',
	'backup command failed' => 'La commande de backup a échoué. Vérifier la constante MYSQLDUMP_COMMAND.',
	'return code' => 'Code retour : {0}',
	'password invalid min length' => 'La longueur du mot de passe doit avoir au moins {0} caractères',
	'password invalid numbers' => 'Le mot de passe doit avoir au moins {0} caractères numériques',
	'password invalid uppercase' => 'Le mot de passe doit avoir au moins {0} caractères majuscules',
	'password invalid metacharacters' => 'Le mot de passe doit avoir au moins {0} métacaractères',
	'password exists history' => 'Le mot de passe ne peut pas être identique à l\'un des dix précédents',
	'password invalid difference' => 'Le mot de passe doit différer d\'au moins trois caractères avec les dix mots de passe précédents',
	'password expired' => 'Votre mot de passe a expiré',
	'password invalid' => 'Votre mot de passe n\'est plus valide',
	'weblink required' => 'L\'adresse du lien est requise',
	'file revision comment required' => 'La révision du commentaire est requise',
	'mail account dnx' => 'Le compte de messagerie n\'existe pas',
	'custom property value required' => '{0} est requis',
	'report name required' => 'Le nom du rapport est requis',
	'report object type required' => 'Le type d\'objet du rapport est requis',
	'error assign task user dnx' => 'Tentative d\'affectation à un utilisateur inexistant',
	'error document checked out by another user' => 'Ce document a été verrouillé par un autre utilisateur.',
	'value must be numeric' => 'La valeur doit être numérique pour {0}',
	'values cannot be empty' => 'La valeur ne peut être vide pour {0}',
	'error assign task permissions user' => 'Vous n\'avez pas les droits d\'affecter une tâche à cet utilisateur',
	'error assign task permissions company' => 'Vous n\'avez pas les droits pour affecter une tâche à cette société',
	'error assign task company dnx' => 'Tentative d\'affectation à une société inexistante',
	'task filter criteria not recognised' => 'Le critère de filtre de tâche \'{0}\' n\'est pas reconnu',
	'repeat x times must be a valid number between 1 and 1000' => 'Répéter X fois doit être un nombre compris entre1et1000.',
	'repeat period must be a valid number between 1 and 1000' => 'La fréquence de répétition doit être un nombre compris entre1et1000.',
	'to repeat by start date you must specify task start date' => 'Vous devez spécifier une date de début pour répéter par date de début de la tâche.',
	'to repeat by due date you must specify task due date' => 'Vous devez spécifier une date de remise pour répéter par date de remise de la tache.',
	'task cannot be instantiated more times' => 'La tâche ne peut être répétée de nouveau , c\'est la dernière répétition.',
	'account already being checked' => 'Le compte a déjà été vérifié.',
	'no files to compress' => 'Aucun fichier à compresser',
	'cant modify subscribers' => 'Modification des abonnés impossible',
	'this object must belong to a ws to modify its subscribers' => 'Cet objet doit appartenir à un contexte pour modifier les abonnés.',
	'mailAccount dnx' => 'Le compte de messagerie n\'existe pas',
	'error add contact from user' => 'Impossible de créer un contact depuis l\'utilisateur.',
	'zip not supported' => 'Le format ZIP n\'est pas pris en charge par le serveur',
	'no tag specified' => 'Aucune étiquette spécifiée',
	'no context permissions to add' => 'Vous n\'avez pas la possibilité d\'ajouter un {0} dans {1}',
	'error invalid recipients' => 'Certaines adresses de courriels ont un problème "{0}": {1}',
	'error cannot assign task to user' => 'La tâche {0} ne peut pas être assignée à {1}',
	'no mailAccount error' => 'Vous ne pouvez pas envoyer de mail car vous n\'avez pas de compte email.',
	'content too long not loaded' => 'Le mail joint ne peut être affiché, mais sera envoyé avec ce mail.',
	'member name already exists in dimension' => 'Ce membre \'{0}\' existe déjà dans la dimension (traduction approx.)',
	'must choose at least one member of' => 'Vous devez au moins choisir un membre de {0}.',
	'timeslot dnx' => 'Intervalle de Temps inexistant',
	'you must select where to keep' => 'Vous devez sélectionner où garder {0}.',
	'there are no changes' => 'Aucune modification n’a été apportée. Le document n’a pas été écrasé.',
	'you dont have permissions to classify object in member' => 'Vous n\'avez pas les permissions pour classer \'{0}\' à \'{1}\'',
	'uploaded file bigger than max upload size' => 'Vous essayez de télécharger un document dont la taille est plus élevé que ​​votre taille limite de téléchargement de {0}.',
	'date format error' => 'Vous avez une erreur lors de la saisie date d\'échéance ou la date de début, le format de date correcte est "{0}", s\'il vous plaît utiliser ce format ou le changer dans les préférences de votre compte.',
	'upload error msg UPLOAD_ERR_INI_SIZE' => 'La taille du fichier téléversé excède le maximum permis({0}).',
	'upload error msg UPLOAD_ERR_FORM_SIZE' => 'La taille du fichier téléversé excède le maximum permis({0}).',
	'upload error msg UPLOAD_ERR_PARTIAL' => 'Le fichier a été partiellement téléversé.',
	'upload error msg UPLOAD_ERR_NO_FILE' => 'Le fichier n\'a pas été téléversé.',
	'upload error msg UPLOAD_ERR_NO_TMP_DIR' => 'Aucun fichier n\'a pu être téléversé, le dossier temporaire est manquant.',
	'upload error msg UPLOAD_ERR_CANT_WRITE' => 'Impossible d\'écrire sur le disque',
	'upload error msg UPLOAD_ERR_EXTENSION' => 'Une exception PHP a interrompu le téléversement.',
	'failed to authenticate email account' => 'Échec lors de l\'authentification du compte courriel',
	'failed to authenticate email account desc' => 'Impossible de s\'authentifier avec le compte "{0}" pour envoyer les notifications. Assurez-vous que les noms d\'utilisateur et mot de passe sont valides.',
	'you cant add member without security permissions' => 'Vous ne pouvez pas ajouter {0} sans permissions car vous ne possédez pas les autorisations. S\'il vous plaît choisir une autre dimension {0}.',
); ?>
