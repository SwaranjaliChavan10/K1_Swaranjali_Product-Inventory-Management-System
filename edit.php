<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = $conn -> prepare('select * from product where id = ?');
    $sql->bind_param('i',$id);
    $sql->execute();
    $user = $sql->get_result()->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
   
   $pname=$_POST["pname"];
    $pcategory=$_POST["pcategory"];
    $pprice=$_POST["pprice"];
    $pquantity=$_POST["pquantity"];
    $pdes=$_POST["pdes"];

    $sql = $conn-> prepare("update product set pname=? ,pcategory=?,pprice=? ,pquantity=?,pdes=? where id=?");
    $sql->bind_param("ssdisi", $pname,$pcategory,$pprice,$pquantity,$pdes,$id);

    if ($sql->execute()) {
        header("Location:dashboard.php");
    }
}

}


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center mt-3">Edit Products</h2>

                     <div
                class="container col-6 border rounded p-3 shadow"
            >
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id="formId5"
                    placeholder=""
                    value="<?= $user['id'] ?>"
                />
                <label for="formId5">Product ID</label>
            </div>
            
             <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pname"
                        id="formId1"
                        placeholder=""
                         value="<?= $user['pname'] ?>"
                    />
                    <label for="formId1">Product Name</label>                    
                </div>

                  
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pcategory"
                        id="formId3"
                        placeholder=""
                         value="<?= $user['pcategory'] ?>"
                    />
                    <label for="formId3">Product Category</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pprice"
                        id="formId2"
                        placeholder=""
                         value="<?= $user['pprice'] ?>"
                    />
                    <label for="formId2">Product Price</label>
                </div>
                
                
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pquantity"
                        id="formId4"
                        placeholder=""
                         value="<?= $user['pquantity'] ?>"
                    />
                    <label for="formId4">Product Quantity</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pdes"
                        id="formId1"
                        placeholder=""
                         value="<?= $user['pdes'] ?>"
                    />
                    <label for="formId1">Description</label>
                </div>
                

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>                

             </form>
                
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
