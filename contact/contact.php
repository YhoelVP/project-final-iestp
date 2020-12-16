<?php
    include_once('conexion.php');

    if((isset($_POST['name']) && empty($_POST['name'])) && (isset($_POST['email']) && empty($_POST['email'])) && (isset($_POST['subject']) && empty($_POST['subject']))) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = 'yoelv732@gmail.com';
        $header = 'From: ' . $email;

        if(mail($to, $subject, $message, $header)) {
            $query = ('INSERT INTO contacto (name, email, subject, message) VALUES ("$name", "$email", "$subject", "$message")');
            $sentInsert = $pdo->query($query);
            // echo "Email enviado correctamente, no comunicaremos con usted los antes posible, gracias por brindar su opinión";
            header('Location: http://localhost/Proyectos/proyecto-final-php-mysql/index.php');
        }
    }
?>
<?php include_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="POST" class="form-contact">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title text-uppercase text-center my-3">Contactate con nosotros</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="name" 
                                id="labelForName" 
                                class="form-control"
                                placeholder="Nombres..."
                                required
                            >
                        </div>

                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                id="labelForEmail" 
                                class="form-control"
                                placeholder="ejemplo@gmail.com"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <input 
                                type="text" 
                                name="subject" 
                                id="labelForSubject" 
                                class="form-control"
                                placeholder="Asunto..."
                                required
                            >
                        </div>

                        <div class="form-group">
                            <textarea 
                                name="message" 
                                class="form-control mb-0" 
                                rows="3"
                                placeholder="Mensaje..."
                                required
                            ></textarea>
                        </div>
                    </div>
                    <button class="btn btn-outline-success mx-4 mb-3 mt-0">Enviar información</button>
                </div>
            </form>
        </div>
    </div>
</div>