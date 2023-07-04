<div class="container" style="margin-top: 10rem; min-height: 600px;">
    <H1 class="" >Realizar Compra</H1>
    <form id="procesar-pago">

        <div id="carrito1" class="form-group table-responsive" >
            <table class="form-group table" id="lista-compra" style >
                <thead>
                    <tr id="">
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col"></th>
                    </tr>

                </thead>
                <tbody >
                
                </tbody>

                <div class="subtotal">
                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                    <th>
                        <p id="totalCompra"  class="price"></p>
                    </th>
                </div >
                
            </table>
        </div>
        <div class="botones-comprar">
            <div id="mensaje-compra" style="display:none;" >
                <p >No tienes ningún artículo en tu carrito de compras.</p>
            </div>
            <div class="col-md-4 mb-2" style="text-align: center;">
                <a href="/" class="btn btn-info btn-block" >Seguir comprando</a>
            </div>
            <!-- <div id="procesar-compra" style="text-align: center;">
                <button type="submit" id="checkout-button">Procesar compra</button>
            </div> -->
            
        </div>
        

        
        
        <!-- <section>
            <div class="product">
                <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
                <div class="description">
                <h3>Stubborn Attachments</h3>
                <h5>$20.00</h5>
                </div>
            </div>
            
        </section> -->
        
    </form>
    <form id="procesar-compra" action="/carrito" method="POST" style="text-align: center;">
        <button type="submit" id="checkout-button">Pagar</button>
    </form>
    
    <!-- action="/carrito" method="POST" -->
        

</div>

<!-- <div id="carrito1" style="margin-top: 25rem;">
    <div>
        <span>
        <a href="#" class="borrar-carrito" data-id="x">X</a>
        </span>
        <p style="font-size: 21px; font-weight: 700; color: #004280;">Mi carrito</p>
        
        <p id="mensaje-carrito" style="text-align: center; padding: 30px 0px 20px; font-size: 15px; font-weight: 700; color: rgb(0, 66, 128); display: none;">No tienes ningún artículo en tu carrito de compras.</p>
    </div>
    <div id="cabezera-carrito" style="max-height:400px; overflow-x:auto; ">
        <table id="lista-carrito" class="u-full-width" style="display: block;">
            <thead style="border-bottom: 1px solid #E1E1E1;">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="cuerpo">
                <tr style="border-bottom: 1px solid #E1E1E1;">
                    <td>  
                        <img src="http://localhost:3000/build/imagenes/days.jpg" width="100">
                    </td>
                    <td>Days</td>
                    <td class="price">S/. 57.00</td>
                    <td>
                    <button class="btn btn-info btn-sm" style="padding-left: 1rem;" data-id="61">
                        +
                    </button>
                    <p class="cant">1</p>
                    <button class="btn btn-danger btn-sm" style="padding-left: 1.3rem;" data-id="61">
                    -
                    </button>
                    </td>
                    
                    <td>
                        <a href="#" class="borrar-curso" data-id="61">X</a>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="subtotal"><span>Subtotal del carrito: </span><span class="price">S/. 57 </span></div>
</div> -->

<?php
    $script = '
    <script src="https://js.stripe.com/v3/"></script>
    <script src="build/js/app.js"></script>
    '
?>