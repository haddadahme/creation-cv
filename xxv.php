<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>cv</title>
    </head>
    
    <body>
        
            <header>
                
                    
                        
                    
       

           <div id="zer"><span style="color: red;font-size: 40px"> <?php echo strtoupper( $_POST['Nom']),'  ';echo strtoupper( $_POST['Prénom']),"<br>";?></span><br>
                         
         <?php   if (isset($_FILES['img']['tmp_name'])) {
        $retour = copy($_FILES['img']['tmp_name'], $_FILES['img']['name']);
        if($retour) {
        
            echo '<img style="width: 20%;  font-size: 20%" src="' . $_FILES['img']['name']. '">';
        }
    }?><br>          
             <span style="color: blue; font-size:30px;"><?php echo $_POST['age']," Année   <br>  " ,$_POST['dp'] ," en ",$_POST['dmn'];;?></span></div>
            
               

        

        
                
                
                   <hr>
            </header>
            <div id="bloc">
            <div id="comp">
                <h1>COMPETENCES:</h1>
                  <h2>  Professionnelles:</h2>
                  <ul>
                    <?php
                       if(isset($_POST['al'])){
                     foreach($_POST['al'] as $valeur)
                      { ?>
                         <li><?php echo " $valeur";?></li><?php
                       }}?>
                   </ul>

                    <h2>  Langues:</h2>
                    <ol>
                         <?php
                        
                           if(isset($_POST['la'])){
                     foreach($_POST['la'] as $val)
                      { ?>
                         <li><?php echo " $val";?></li><?php
                       }}?>
                    </ol>
                    <h1>Formation:</h1>
                    <h4 class="form"><?php 
                        echo  $_POST['for'];
                        

?>
                                       
                    </h4>

                
            </div>
            <div id="cont">
                <h1>CONTACT:</h1>
                  <h3 class="jj">Téléphone: <span class="cnt"><?php echo $_POST['tel'];?></span></h3>
                  <h3 class="jj">Address:<span class="cnt">  <?php echo $_POST['adr'];?></span></h3>
                  <h3 class="jj">Email:<span class="cnt"> <?php echo $_POST['email'];?></span></h3>
                  
                <h1>Experience:</h1>
                    <h4 class="form">  <?php
                        echo $_POST['exp'];
                       
                       
                        ?></h4>
                     
                    

                
                
            </div>
           
            </div>
           
              
            
          
        
    </body>
</html>
