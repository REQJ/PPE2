<!-- Intro -->
    <section id="Accueil" class="one dark cover">
        <div class="container">
                <header>
                    <h2>Accueil</h2>
                </header>
        </div>
    </section>

<section> 
        <body> 
            <section>
        <?php
        $nbNouvelle = 0;  
        foreach ($lesNouvelles as $nouvelle){
        if ($nbNouvelle <=2){     
        ?>
            
            <div class="principale_div2">  
                <div class="secondaire_div2">
                    <div class="images"><img src="images/lycee.jpeg" Alt=""/></div>
                    <p><?php echo $nouvelle["titre_nouvelle"]?></p>
                    <p><?php echo $nouvelle["description_nouvelle"]?></p>
                </div> 
            </div> 
            <?php $nbNouvelle = $nbNouvelle + 1; ?> 
            
            <?php
        }  
        }
        ?>  
        </section>
        <div>
            <a href="index.php?routeur=home&action=getAll"><button type="button" class="btn btn-primary">Voir plus</button>    
        </div>
        </body> 
       
</section>
            