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
        <?php 
        foreach ($lesNouvelles as $nouvelle){    
        ?>
            
            <div class="principale_div2">  
                <div class="secondaire_div2" >
                    <div class="images"><img src="images/lycee.jpeg" Alt=""/></div>
                    <p class="txt_nouvelle"><?php echo $nouvelle["titre_nouvelle"]?></p>
                    <p class="txt_nouvelle"><?php echo $nouvelle["description_nouvelle"]?></p>
                </div> 
            </div>  
        <?php
        }
        ?>   
        </body> 
</section>       