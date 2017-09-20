<?php 
use App\Variables; ?>

<!-- CONTACTAME -->
    <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="{{Variables::valor('FondoContacto')}}" data-stellar-background-ratio="0.2" id="contacto">
        <div class="har_over" data-color="#000" data-opacity="0.6"></div>
        <div class="container-fluid text-center">
            <div class="row">
                <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                    <div class="col-md-8 col-sm-12 col-md-offset-2 har_form_animation">
                        <h2>Contáctame</h2>
                        <h3>Deja tú mensaje, y pronto me pondré en contácto contigo.</h3>
                        <form id="har_form" class="har_form">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nombres" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Telefono" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="E-mail" name="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Fecha" name="fecha">
                            </div>  
                            <div class="col-md-6">
                                <select class="form-control" name="tipo">
                                    <option disabled="" selected="">Selecciona el tipo de evento</option>
                                    <option value="boda-quince">Boda o 15 Años</option>
                                    <option value="empresarial">Empresarial</option>
                                    <option value="alquiler">Alquiler sonido, iluminaciòn y/o video</option>
                                    <option value="show-dj">Show DJ</option>
                                    <option value="wf-factory-case">WF Factory Case</option>
                                    <option value="producer">Producer</option>

                                </select>
                            </div>                           
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Mensaje" name="message"></textarea>
                                <input type="submit" class="btn" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- end CONTACTAME -->