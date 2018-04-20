<!DOCTYPE html>
    <html>
        <head>
            <?php include '../header.html' ?>
            <link rel="stylesheet" href="../css/style2.css">
             <script src="../js/game1.js"></script>

         </head>
        <body>
          <section id="game" class="container-fluid">
            <div id="texte" class="jumbotron">
                <p>Salut! Moi c'est Mahmoud la Marmotte, je t'ai trouvé au bord de la route à coté d'une voiture accidentée,
                j'te propose un petit jeu afin de vérifier que tout va bien.</p>
                <button type="button" id="start">Pret?</button>
            </div>
            <div class="row">
              <div id="left" class="container col-4 text-center">
                  <div class="col-12">
                    <button type="button" id="bt1" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt2" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt3" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt4" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt5" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
              </div>
              <div id="img" class="col-4">
                <img src="../img/marmot.png" class="img-fluid"/>
              </div>
              <div id="right" class="container col-4 text-center">
                  <div class="col-12">
                    <button type="button" id="bt6" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt7" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt8" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt9" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
                  <div class="col-12">
                    <button type="button" id="bt10" class="btn btn-warning invisible "  data-toggle="modal" data-target="#myModal">Cliquez ici</button>
                  </div>

                  <div class="modal fade " id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Félicitations</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
<
                              Tu me parait en bonne santé. Il faut que je t'explique ce qu'il s'est passé pendant que tu étais inconscient : un <strong>virus informatique</strong> s'est propagé sur tout le réseau! Le code initial fut créé par
                                 des stagiaires et balancé sur un Hub (Git Hub), ce qui a créé un monstrueux bordel...
                                 plus d'internet, plus de transport, feux rouges, péages et grosses perturbations sur tout le réseau électrique.

                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="">
                        <a href="page2.php"class="myButton">Suivant</a>
                    </div>
                  </div>
              </div>


          </section>
          <?php include '../footer.html' ?>

        </body>
    </html>
