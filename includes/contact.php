<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <img src="assets/img/location-contact.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Localização</h4>
                        <p>Avenida Marechal Tito,</br> 1500 - São Miguel Paulista</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <img src="assets/img/github-contact.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>GitHub</h4>
                        <a href="https://github.com/CodeForgeGroup" target="_blank"><p>CodeForgeGroup</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <img src="assets/img/message-contact.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Email</h4>
                        <p>codeforgegroup@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.025328309543!2d-46.434437024671894!3d-23.49559717884505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1710931959053!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        height="450" style="border:0;"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Contato</h3>
                    <form id="form-contato" onsubmit="return false">
                        <input type="text" id="nome" name="nome" placeholder="Nome:">
                        <input type="text" id="email" name="email" placeholder="Email:">
                        <input type="text" id="numero" name="numero" placeholder="Número:">
                        <textarea id="mensagem" name="mensagem" placeholder="Deixe sua mensagem:"></textarea>
                        <button type="submit" onclick="enviarEmail()" class="contact-btn">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

