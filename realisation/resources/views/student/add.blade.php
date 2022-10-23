<form action="save-student" method="POST">
@csrf
Nom :<input name="name" type="text">
Prénom :<input name="nickname" type="text">
Email :<input name="email" type="text">
<button>ajouter</button>
</form>