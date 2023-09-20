
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">KDA Team</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{ url('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Visi-misi</a>
                    <a href="service.html" class="nav-item nav-link">About</a>
                   
                    <a href="{{ url('contack') }}" class="nav-item nav-link">Contact</a>
                    <a href="{{ url('laporan') }}" class="nav-item nav-link">Laporan</a>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>