<?php


$message = "";

if (isset($_POST['butt_submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $resultat = connexion($login,$password);
    

    if ($resultat=="error") {
        $message = "Login ou mot de passe Incorrect";
    }else {
        header("location:index.php?page=".$resultat);
    }
}






?>


<div class="container">
    <div class="container-tete">
        <div class="title">Login Form &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</div>
    </div>
    <div class="container-body">
        <form action="" method="post" id="form-connexion">
        

            <div class="input-form">
                <div class="icon-form icon-form-login"></div>
                <input type="text" class="form-control" name="login"  error="error-1"  placeholder="Login" >
                <div class="erreur-form" id="error-1"></div>
            </div>

            <div class="input-form">
                <div class="icon-form icon-form-passwrd"></div>
                <input type="password" class="form-control" name="password"  error="error-2" placeholder="Password" >
                <div class="erreur-form" id="error-2"></div>
            </div>

            <div class="input-form">
                
                <button type="submit" class="button-form" name="butt_submit" >Connexion</button>
                <a href="" class="lien-form">S'inscrire pour jouer?</a><br>
                
            </div>
            <?php if (! empty($message)) { ?>
                        <p class="Message"><?php echo $message; ?></p>
                        <?php } ?>   
            
        </form>
    </div>
</div>


<script>
    const  inputs = document.getElementsByTagName("input");
    for(input of inputs){
        input.addEventListener("keyup",function(e){
           if( e.target.hasAttribute("error")){
            var idDivError=e.target.getAttribute("error");
            document.getElementById(idDivError).innerText="";
           }
        })
    }


document.getElementById("form-connexion").addEventListener("submit",function(e){
            
   const  inputs = document.getElementsByTagName("input");
   var error=false;
        for(input of inputs){
            if(input.hasAttribute("error")){
                var idDivError=input.getAttribute("error");
                if(!input.value){
                       document.getElementById(idDivError).innerText="*Ce champ est obligatoire";
                       error = true;                    
                    }  
                    
                }            
        }

    if(error){
        e.preventDefault();
        return false;  
    
    }      

})

</script>