 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                    </div>
                    
                </div>
            </div>
        </header>

    <section tyle="background-color:white">
        <br>
        <div class="container" >
            <div class="card" style="text-align:justify;box-shadow:10px 10px 10px rgba(0, 0, 0, 0.5);">
                <div class="card-body">
                    <p style="text-align:justify;">
                        <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>        
                    </p>
                </div>
            </div>               
        </div>
    </section>