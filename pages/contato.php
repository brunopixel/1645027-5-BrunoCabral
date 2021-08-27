<?php include_once('pages/topo.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mb-5">

            <div class="text-center">
                <h2 class="section-heading text-uppercase">Entre em Contato</h2>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt lacinia nulla porta tempor. In venenatis purus vel nunc dictum feugiat. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-12">
                        <div class="form-group mb-5">
                            <input class="form-control" id="name" type="text" placeholder="Nome *" required />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control" id="email" type="email" placeholder="Email *" required />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control" id="phone" type="tel" placeholder="Telefone *" required />
                        </div>
                        <div class="form-group form-group-textarea mb-5">
                            <textarea class="form-control" id="message" placeholder="Sua Mensagem *" required></textarea>
                        </div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="button">ENVIAR</button>
                    </div>
                </div>
               
            </form>
        </div>
        <div class="col-md-6 mt-5 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4205.019205244642!2d-48.55480867838492!3d-27.593976804851398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95273822148dc137%3A0x81b552801ce33417!2sO%20Padeiro%20de%20Sevilha!5e0!3m2!1spt-BR!2sbr!4v1630095911358!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>