<!-- Admin -->
					<section id="account" class="">
						<div class="container">

							<header>
								<h2>Gérer votre compte</h2>
							</header>
                                                       <!--
                                                       Changer lien portfolio (recupérer l'ancien dans textbox)
                                                       Changer avatar (recupérer l'ancien dans textbox + image)
                                                       Changer mail (recupérer l'ancien dans textbox)
                                                       Option: "partager mon mail" (sur le portfolio) (A cocher, decocher)
                                                       -->
                                                       
                                                       <form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="portfolio" placeholder="http://votre_portfolio.fr" value="<?= $mesInfo['portfolio_utilisateur']?>"/></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" value="<?=$mesInfo['mail_utilisateur']?>"/></div>
                                                                        <div class="6u$ 12u$(mobile)"><input type="text" name="avatar" placeholder="Avatar" value="<?=$mesInfo['avatar_utilisateur']?>"/></div>
									<div class="6u$ 12u$(mobile)">					
									 
									
									<div class="12u$">
										<input type="submit" value="Envoyé" />
									</div>
								</div>
							</form>
							

						</div>
					</section>
<?php var_dump($mesInfo);
//var_dump($_SESSION['user']);
?>

<input type="text" name="avatar"  value="<?php echo $_SESSION['user']?>">
                                            