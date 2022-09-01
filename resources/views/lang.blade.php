<!DOCTYPE html>

<html>

<head>

    <title>How to Create Multi Language Website in Laravel - ItSolutionStuff.com</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card mt-4" style="width: 70rem;">
                <div class="card-body">
                    <div class="card-header bg-primary">
                        <h1 class="p-3 text-white text-center"> Create Multi Language Website in Laravel 9</h1>
                    </div>
                    <div class="col-md-2 col-md-offset-6 text-right m-3">
                        <strong>Select Language: </strong>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>

                            <option value="bd" {{ session()->get('locale') == 'bd' ? 'selected' : '' }}>Bangla</option>

                            <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>

                            <option value="hd" {{ session()->get('locale') == 'hd' ? 'selected' : '' }}>Hindi</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <h3 class="text-center m-3">{{ __('message.title') }}</h3>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function() {

        window.location.href = url + "?lang=" + $(this).val();

    });
</script>
</html>