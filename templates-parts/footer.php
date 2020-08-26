<section id="banner" class="banner_mobile">
    <div class="container">
        <div class="row">

            <div class="col-sm-7 col-sx-6 wow fadeIn">
                <div class="text">
                    <!-- <h1>Lorem Ipsum <br> dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Nunc lacus magna, vestibulum.</p> -->
                </div>
            </div>

            <div class="col-sm-4 col-sx-6 wow slideInUp">
                <div class="form-box-title">
                  <h3>Preencha o formulário abaixo <br> para obter contato!</h3>
                </div>
                <div class="form-box-inputs">
                    <form action="./obrigado.php" method="post">
                        <input type="text" name="nome" placeholder="Nome" required>
                        <input type="email" name="email" placeholder="E-mail" required>
                        <input type="text" name="telefone" maxlength="15" placeholder="Celular/Telefone" id="telefone"
                            required>
                        <textarea name="mensagem" placeholder="Descreva seu Projeto" required></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                    <a href="./wpp.php" class="btn btn-whats">Fale
                        conosco por Whatsapp</a>
                </div>
            </div>

        </div>
    </div>
</section>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5278374730196!2d-46.57852448502239!3d-23.549478884688714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ebe552b1f07%3A0x194f47852c067ed4!2sR.+Bom+Sucesso%2C+1256+-+Cidade+M%C3%A3e+do+C%C3%A9u%2C+S%C3%A3o+Paulo+-+SP%2C+03305-010!5e0!3m2!1spt-BR!2sbr!4v1551186848453"
  width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

<footer class="wow fadeIn">
  <div class="container">
    <div class="row">

      <div class="col-sm">
        <img src="./assets/img/logo-white.png" alt="" class="img-fluid">
      </div>

      <div class="col-sm">
        <h3>Encontre-nos</h3>
        <p>
        Rua Bom Sucesso, 1256A 
        <br>Tatuapé - São Paulo/SP<br>
        CEP: 03305-000
        </p>
      </div>

      <div class="col-sm">
        <h3>Contato</h3>
        <p>
          Entre em contato conosco: <br>
          <span>Atendimento:</span> <a href="tel:<?php echo $phoneLink ?>"> 
          <?php echo $phone ?></a><br>
          <span>Atendimento 2:</span> <a href="tel:<?php echo $phoneLink2 ?>"> 
          <?php echo $phone2 ?></a><br>
          <span>Whatsapp:</span> <a href="./wpp.php">
            <?php echo $wpp ?></a>
          <br><span>E-mail:</span><a href="mailto:ateliedamadeira.marcenaria@gmail.com"> Contato</a>
        </p>
      </div>

      <div class="flex-sm-row">
        <h3>Redes Sociais</h3>
        <div class="d-flex justify-content-center redes-sociais">
          <a href="https://www.facebook.com/ateliedamadeira.marcenaria/" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/ateliedamadeiramarcenaria/" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://ateliedamadeiramarcenaria.com.br/blog/" target="_blank">
            <i class="fas fa-rss"></i>
          </a>
        </div>
      </div>

    </div>
  </div>