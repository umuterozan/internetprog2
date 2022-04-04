<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 pt-5">       
        <h2 class="mb-4">Gelen Formlar</h2>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="adminDataTables">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Servis</th>
                    <th scope="col">Bütçe</th>
                    <th scope="col">Mesaj</th>
                    <th scope="col">Oluşturulma Tarihi</th>
                    <th scope="col" style="width: 50px; text-align: center;">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($forms as $form) : ?>
                    <tr>
                        <th scope="row"><?=$form->id;?></th>
                        <td><?=$form->name;?></td>
                        <td><?=$form->email;?></td>
                        <td><?=$form->service;?></td>
                        <td><?=$form->budget;?></td>
                        <td><?=$form->message;?></td>
                        <td><?=date('d.m.Y - H:i', strtotime($form->created_at));?></td>
                        <td><a href="<?=base_url("admin/delete/$form->id");?>" class="btn btn-danger" style="width: 100%;">Sil</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/js/rundatatables.js')?>"></script>
</body>
</html>