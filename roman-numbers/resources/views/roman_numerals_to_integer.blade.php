<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

        <title>Laravel</title>
    </head>
    <body>
        <nav class="site-header sticky-top py-1">
          <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="{{ route('index') }}">Home Page</a>
            <a class="py-2 d-none d-md-inline-block" href={{ route('encodeRomanNumerals') }}>Integer to Roman Numerals</a>
            <a class="py-2 d-none d-md-inline-block" href={{ route('decodeRomanNumerals') }}>Roman Numerals to Integer</a>
          </div>
        </nav>

        <main role="main" class="container mt-4">
          <div class="jumbotron">
            <h1>Roman Numerals To Integer<h1>
              
            <form method="POST">
              @csrf
              <div class="form-group mt-5">
                <label for="integerAmount">Enter Amount</label>
                <input type="text" class="form-control" id="romanNumeralsAmount" name="romanNumeralsAmount" aria-describedby="romanNumeralsAmountHelp" required placeholder="Enter an amount">
                <small id="integerAmountHelp" class="form-text text-muted">Enter an amount between 1 and 100,000 in Roman Numerals</small>
              </div>
              <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>

            <h2>{{ $amountToInteger }}</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          </div>
        </main>
    
        <footer class="container py-5">
          <div class="row">
            <div class="col-6 col-md">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
              <small class="d-block mb-3 text-muted">© 2024</small>
            </div>
            <div class="col-6 col-md">
              <h5>Roman Numerals Application</h5>
            </div>
          </div>
        </footer>
    
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

