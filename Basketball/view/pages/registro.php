
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/pages/css/registro.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="post">
        <h3>Registro</h3>

        <label for="name" class="labelInput">Nome</label>
        <input class="inputUser" type="text" name="name" required>
        
        <label for="user" class="labelInput">Usuário</label>
        <input class="inputUser" type="text" name="user" required>
       
        <label for="password" class="labelInput">Senha</label>
        <input class="inputUser" type="password" name="password" required>
        

        <button>Registrar</button>

        <p class="text-center text-muted mt-5 mb-0" >Já possui uma conta? 
            <a  class="register" href="http://localhost/projetos/Basketball/login"class="fw-bold text-body">
                <u>Login aqui</u>
            </a>
        </p>
        
        <br>

        <div>
            <a href= 'http://localhost/projetos/Basketball' class="register" >Voltar</a>
        </div>

    </form>
</body>
</html>
