<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">

        <div class="content">
            <form action="/photo" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="block-content block-content-full tab-content">
                  <div class="tab-pane active show" id="wizard-simple-step1" role="tabpanel">

                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control" name="photo"/>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                  </div>
                </div>
            </form>
         </div>
    </body>
</html>
