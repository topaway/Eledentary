<?php

/*
*
*	Fichier de langue Anglais pour le projet
*	gestionnaire dentaire
*
*/

$traduction = array (
//----------------------------------------------------------------------------
// Clef			=>			Des mots %parametre substitué% et encore des mots.
//============================================================================

//Userbar
'hello_message'		=>			"Hello %PRENOM NOM%",

// > Menu
'menu_title'		=>			"Navigation",
'administration'	=>			"Administration",
'patient_managing'	=>			"Data Patient",
'nb_patients'		=>			"Patient :",
'nb_inscrits'		=>			"Student :",
'back_to_top'		=>			"Back to top",
'go_logs'			=>			"Logs",
'about'				=>			"About",

// > Profile box
'profile_title'		=>			"Hello %NAME%",
'new_users'			=>			"New users",
'no_new_user'		=>			"No news User",
'admin_messages'	=>			"Admin Messages",

// > Page 404
'404_title'			=>			"Error 404 : Page not Found",
'404_msg'			=>			"The Page that you seek ( </strong><em>%TEXTE%</em></strong> ) doesn't exist",

// Page 403
'403_title'			=>			"Error 403 : Acces Forbiden",
'403_msg'			=>			"Acces Not Permited.",
'back_home'			=>			"Back Home",

// Accueil
'home'				=>			"Home",
'home_msg'			=>			"Welcome to the patient manager of the CMC Dental.<br>This website will serve ( when it'll be finished ) to dental's students of UMF. Project will allow them to easily access patient information they need to carry out practical activities.<br/>To use this service, please register.",
'last_news'			=>			"Last News",
'read_all'			=>			"Read All Articles",

// > Inscription
'page_inscription'	=>			"Register" ,
'inscription'		=>			"Register here." ,
'success'			=>			"<strong>successful registration :</strong>Please wait for the approval email.",
'missing_infos'		=>			"Please complete the following information :",
'bad_infos'			=>			"The information received are inconsistent.<br>Try again.",
'new_page'			=>			"Please complete the fields below to register :",
'incorect_infos'	=>			"Please check the following information :",
'matricule_double'	=>			"This serial number is already used.",
'sign_up'			=>			"Register",

// > Connexion
'page_connexion'	=>			"Log in",
'missing_login'		=>			"The entered information is incomplete" ,
'incorect_login'	=>			"Username / password wrong.",
'sign_in'			=>			"Log on to the site with your ID and password.",
'approve_pending'	=>			"Your account has not yet been approved.",
'status_banned'		=>			"Your account has been blocked by an administrator",
'logged_in'			=>			"You are connected",
'identification'	=>			"Identification :",

// > Déconnexion
'page_deconnexion'	=>			"Sign Out",
'loged_out'			=>			"You are disconnected.",
'already_out'		=>			"You were not connected.",

// > Profile
'page_profile'		=>			"My profile",
'save'				=>			"Save Changes",
'action_approuver'	=>			"Approve",
'action_bannir'		=>			"banish",
'action_supprimer'	=>			"remove",
'action_adminiser'	=>			"Appoint Admin",
'action_email'		=>			"Send an email",
'success_edit'		=>			"User changed.",
'success_approve'	=>			"User approved.",
'success_ban'		=>			"Banned user.",
'success_chadmin'	=>			"The user is now administrator.",

// > Changer de mot de passe
'page_reset_password'=>			"Change password",
'forgot_password'	=>			"Forgotten password?",
'clef'				=>			"Key:",
'matricule_invalide'	=>		"The registration number entered does not exist",
'email_invalide'	=>			"The email entered doesn't match",
'demande_existe'	=>			"<strong>Mail resent</strong> : check your spam",
'clef_invalide'		=>			"The password change key does not exist",
'password_invalide'	=>			"<strong>Invalid password</strong> : use more than 6 alphanumeric characters, ou '@', '_', '-'",
'passwords_nomatch'	=>			"The password and confirmation are different",
'clef_envoyee'		=>			"<strong>E-mail sent</strong> : An email containing a link has been sent to you. Check your spam.",
'password_changed'	=>			"<strong>Password changed</strong> : You can login with your new password.",
'copiez_clef'		=>			"You can copy the key received by email here :",
'change_password_for'	=>		"Password change for %NOM PRENOM% :",
'password_changed'	=>			"Password changed to %NOM PRENOM% ;<br/>You can now log in with this password.",



// > Page de contact
'page_contact'		=>			"Contact Admins",
'write_message'		=>			"Write your message <small>(20,000 characters max)</small>",
'msg_objet'			=>			"Subject :",
'msg_corps'			=>			"Your message : <small>(Simplified BBcode activated)</small>",
'msg_send'			=>			"Send",
'success_msg_send'	=>			"Your message has been sent.",
'error_msg_missing_infos'	=>	"Fill in the following information :",
'error_msg_incorrect_infos'	=>	"Check the following fields:",
'objet'				=>			"Subject of the message",
'corps'				=>			"Message content",

// > Page des messages
'page_viewmessages'	=>			"Received messages",
'page_vm_msg'		=>			"Remember to mark messages as read when you finish reading them..",
'expediteur'		=>			"Sender",
'date'				=>			"Submitted On",
'title_msg_unread'	=>			"Unread messages",
'title_msg_read'	=>			"Read messages",

// > Page de Lecture de message
'page_readmessage'	=>			"",
'page_rm_msg'		=>			"Remember to mark messages as read when you have finished reading them.",
'action_msg_markread'	=>		"Mark as read",
'action_msg_markunread'	=>		"Mark as unread",
'msg_send_by'		=>			"Message sent ",

// > Liste de patients
'page_patients'		=>			"Patient List",
'initiales'			=>			"Initials",
'pathologie'		=>			"Pathology",
'details'			=>			"Détails",
'select_patho'		=>			"Filtrer par pathologie :", 
'filtrer'			=>			"Filtrer",
'create_patient'	=>			"Add Patient",

// > Profile de patient
'page_profile_patients'	=>			"Profile of patients",
'info_patient'		=>			"General informations",
'info_pathologie'	=>			"Information about the Pathology",
'cnp'				=>			"C.N.P",
'dent'				=>			"Tooth concerned",
'info_contact'		=>			"Means to Contact",
'update_patient_ok'	=>			"Changes saved",
'register_patient_ok'	=>		"Registered patient",
'bad_form_patient'	=>			"Incorrect form: please try again",
'bad_infos_patient'	=>			"Fill in all the fields",
'register'			=>			"save",


// > Liste des éléves inscrits
'page_eleves'		=>			"Enrolled students",
'page_eleves_msg'	=>			"Click the name of a student to access his profile details." ,

// > Gestion des pathologies
'page_liste_patho'	=>			"List of pathologies",
'page_add_pathologies'=>		"Add Pathologies",
'nom_patho_fr'			=>		"Pathology: French name",
'details_patho_fr'		=>		"Détails (en)",
'nom_patho_en'			=>		"Pathology: English name",
'details_patho_en'		=>		"Détails (en)",
'annees_soignantes'	=>			"Years concerned",
'patho_added'		=>			"Added pathology",
'patho_edited'		=>			"Changes saved",
'patho_invalid'		=>			"<strong>Error :</strong> Please fill in the following fields",
'patho_deleted'		=>			"deleted successfully pathology",
'patho_suppr'		=>			"Delete pathology",
'page_listepatho'	=>			"List of pathologies",
'nom_patho'			=>			"Pathology",
'patho_details'		=>			"Details",

// > Mes Patients
'patho_nom'				=>			"Pathology",
'free_patient_ok'		=>			"Patient successful release",
'reserve_patient_ok'	=>			"Patient booking successful",
'delete_patient_ok'		=>			"Patient removal was successful",
'patient_hasmedic'		=>			"The patient is already booked",

// > Page de news
'page_news'			=>			"Articles & News",
'write_post'		=>			"Redaction :",
'fr_titre'			=>			"Title (fr)",
'fr_contenu'		=>			"Article : version française",
'en_titre'			=>			"Titre (en)",
'en_contenu'		=>			"Article : version anglaise",
'publish_post'		=>			"Publish",
'delete_post'		=>			"Delete Article",
'news_msg_success'	=>			"The message was published.",
'delete_msg_success'=>			"The message was deleted.",
'news_msg_new'		=>			"Write an article in both languages, then click publish.",
'news_msg_error'	=>			"There is a problem with your form. Contact an administrator.",
'news_missing_infos'	=>		"<strong>blank :</strong> %info%",

// > Chat & discussion
'page_dentchat'		=>			"Dent'Chat",

// Variables
'nom'				=>			"Last name",
'prenom'			=>			"First name",
'annee'				=>			"Year of studies",
'email'				=>			"Mail address",
'telephone'			=>			"Phone number",
'matricule'			=>			"Registration number",
'motDePasse'		=>			"Password",
'confMotDePasse'	=>			"Confirm the password",
'informations'		=>			"Informations :",

// Détails Etudiants
'all_years'			=>			"All Years",
'3'					=>			"3rd year",
'4'					=>			"4th Year",
'5'					=>			"5th year",
'6'					=>			"6th year",
'nombre_soins'		=>			"Performed care",
'statut'			=>			"Status",
'administrateur'	=>			"Administrator",
'banni'				=>			"Banned",
'approuve'			=>			"Confirmed",
'nouveau'			=>			"Pending",
'all_status'		=>			"All",

// Réservation Patient
'action_free'		=>			"Release the patient",
'my_patient'		=>			"My Patients",
'action_reserve'	=>			"Book the Patient",

// About Us :
'page_about_us'		=>			"Admins, Team & contacts" ,

// Wiki BBcode
'howto_bbcode'		=>			"How to use BBCode ?",
'page_howto_bbcode'	=>			"The BBcode",

// > Header
'site_name'			=>			"CMC Dental patients Manager",
'site_title'		=>			"Website designed to give you an access to the CMC Dental patient database",

// > Footer
'copyryght'			=>			"CMC 2015, all rights reserved",
'contributors'		=>			"Contributors : %NOMS%" );


