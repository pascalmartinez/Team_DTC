<!DOCTYPE html>
    <html>
        <head>
               <?php include '../header.html' ?>
          <script src="../js/game1.js"></script>
          <title></title>

        </head>

        <body>
          <section id="game" class="container-fluid">
            <div id="texte" class="jumbotron">
                <p>Salut! Moi c'est Marmoud la Marmotte, je t'ai trouvé au bord de la route à coté d'une voiture accidentée,
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
                    <button type="button" id="bt10" class="btn btn-warning invisible">Cliquez ici</button>
                  </div>
              </div>

            </div>

          </section>
          <?php include '../footer.html' ?>
        </body>
    </html>
