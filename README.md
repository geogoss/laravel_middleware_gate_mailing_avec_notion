
                                        Middleware
======================================================================================================


Exercice laravel_middleware_1
- Créez un projet avec 2 pages pour les utilisateurs et 1 backoffice
- Accueil
- Article
- Backoffice
- Créez un middleware
- Si on est pas connecté on ne peut aller que sur la page Accueil
- Si on est connecté on peut aller partout


Exercice laravel_middleware_1_part_2
Faites un commit
- Créez un middleware : RoleVerification
- Si on est pas connecté on ne peut aller que sur la page Accueil
- Si on est connecté on peut aller sur les pages Accueil et Article
- Si on est connecté et qu'on a le role Admin on peut aller partout



Exercice laravel_middleware_1_part_3
Faites un commit
- Dans le back-office(page home)
Rajoutez un lien dans le menu de gauche vers des pages pour un crud d'articles (id,titre,texte,user_id)
- Create
- Show
- Edit
- Delete



Exercice laravel_middleware_1_part_4
1.Faire un commit
2.Créer un rôle Webmaster
- Le membre a accès aux pages : Accueil et Articles( c'est une page avec la liste des titres des articles il faut cliquer dessus pour lire l'article)
- Le webmaster peut accéder a Accueil et Articles sur le site et dans le back office a Articles à toutes les methodes mais pas a la page "Users" cité dans le prochain point.
3.Créer une page users dans le backoffice( on y voit la liste des users, nom et role )



Exercice laravel_middleware_1_part_5
1.Faire un commit
2.Créer un rôle Rédacteur
- Les rédacteurs peuvent accèder a toutes les pages saufe celle des users dans le backoffice
- Les rédacteurs ne peuvent accéder a l'édit et l'update et le delete uniquement que des articles qu'ils ont eux même créez, ils ne peuvent pas edit/update/delete les articles des autres.

                                                Middleware
======================================================================================================



Exercice Gate 1
Dans le projet middleware
-Permettre aux rédacteur de ne voir que les buttons delete de leurs articles


Exercice Gate 2
Dans le projet middleware
- Créer plusieurs Admin
- Chaque Admin doit pouvoir supprimer tous les users mis à part eux même ou un user qui aurait le role admin
- Les admins ne peuvent editer que des personnes qui n'ont pas le role Admin


Exercice Gate 3
Dans le projet middleware
- Les Webmaster ne peuvent ni supprimer un admin, ni un autre webmaster
- Les Webmaster ne peuvent ni editer un autre webmaster ni éditer un admin
- Les webmaster ne peuvent pas donner le role Admin et Webmaster à un user



    
                                                Mail
======================================================================================================


Exercice Mail 1
Dans le projet middleware
- Créez une page contact dans la partie siteweb qui contient un formulaire de contact "Adresse Email" et "Message"
- Ce formulaire de contact vous envoi un mail avec le contenu de votre view


laravel_mail_exo_2
Dans le projet middleware
- Créez une page contact dans la partie siteweb qui contient un formulaire de contact "Adresse Email" et "Message"
- Ce formulaire de contact vous envoi un mail avec l’adresse email et le message de la personne

laravel_mail_exo_3
Continuez dans le même projet
- Designez le mail avec du css
- Ajoutez un input 'sujet' (sujet du mail) dans le formulaire de contact
- utilisez le helper subject() dans votre build pour rajouter le sujet du mail dans le mail
public function build()
{
// on envoi dans la blade monTemplate le contenu de la variable public "mail" grace a la methode with
return $this->from($this->mail->email)->subject('....')->view('template-mail.monTemplate')->with(['mail' => $this->mail]);



laravel_mail_exo_4
Continuez dans le même projet
- Créez une table "emails" dans laquelle vous allez stocker vos emails
- Affichez tous les mails dans le backoffice dans une nouvelle page "Emails"


laravel_mail_exo_5
Continuez dans le même projet
- Créez une table "email_subjects" dans la quelle vous y mettez plusieurs sujets prédéfinis 'Besoin de conseils' , 'Demande d'information supplémentaires', 'Devis'
- Rendez ses choix possible dans la page contact au lieu d'un input text pour le sujet passez a un select



laravel_mail_exo_6
Continuez dans le même projet
- Faites un input inscription newsletter dans la navbar
- Quand quelqun met son adresse email dans la newsletter et appuis sur s'inscrire, cela met son adresse email dans une table "newsletters"
- La personne qui vient de s'inscrire a la newsletter recoit un mail de confirmation (il faut faire une nouvelle template de mail,etc)


laravel_mail_exo_7
Continuez dans le même projet
- Faites une page d'inscription
- A l'inscription on reçoit un mail avec notre nom d'utilisateur, notre email, notre mot de passe et un message de bienvenue.


