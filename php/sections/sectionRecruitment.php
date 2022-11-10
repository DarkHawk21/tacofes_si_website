<section class="recruitment" id="sectionRecruitment">
    <div class="container">
        <h2 class="subtitle subtitle--white">Reclutamiento de personal médico</h2>
        <p class="paragraph paragraph--white">Contrata a tu personal médico a un bajo costo, contamos con una amplia cartera de perfiles para la salud completamente capacitados.</p>

        <form action="#" class="recruitment__form" onsubmit="sendEmail(event)">
            <div class="form__row">
                <p class="alert hidden" id="formAlertMessage"></p>
            </div>

            <div class="form__row">
                <div class="form__control__container">
                    <img src="./src/images/icons/icon_user.svg" alt="Icon user">
                    <input type="text" class="form__control" placeholder="Nombre *" id="formName" name="firstName" required>
                </div>

                <div class="form__control__container">
                    <img src="./src/images/icons/icon_user.svg" alt="Icon user">
                    <input type="text" class="form__control" placeholder="Apellido *" id="formLastname" name="lastName" required>
                </div>
            </div>

            <div class="form__row">
                <div class="form__control__container">
                    <img src="./src/images/icons/icon_email.svg" alt="Icon email">
                    <input type="email" class="form__control" placeholder="Correo *" id="formEmail" name="email" required>
                </div>

                <div class="form__control__container">
                    <img src="./src/images/icons/icon_phone.svg" alt="Icon phone">
                    <input type="text" class="form__control" placeholder="Teléfono" id="formPhone" name="phone">
                </div>
            </div>

            <div class="form__row">
                <div class="form__control__container">
                    <img src="./src/images/icons/icon_users_group.svg" alt="Icon users group">
                    <input type="text" class="form__control" placeholder="Empresa" id="formCompany" name="company">
                </div>

                <!-- <div class="form__control__container">
                    <img src="./src/images/icons/icon_work.svg" alt="Icon work">
                    
                    <select class="form__control">
                        <option value="">Perfil a reclutar</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                    </select>
                </div> -->
            </div>

            <div class="form__row">
                <div class="form__control__container form__control__container--textarea">
                    <textarea class="form__control" placeholder="Comentarios *" id="formComments" name="msg" required></textarea>
                </div>
            </div>

            <div class="form__row">
                <input type="checkbox" class="form__control" id="formTerms" name="terms" checked>
                <label for="formTerms">Acepto los <a href="./src/files/FZ_aviso_de_privacidad.pdf" target="_blank">términos y condiciones</a>. *</label>
            </div>

            <div class="form__row form__row--right">
                <button type="submit" class="button" id="formButtonSend">Enviar</button>
            </div>
        </form>
    </div>
</section>