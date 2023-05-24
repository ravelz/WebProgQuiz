<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <body>
        <div class="container d-flex flex-column">
            <p class="h1 bg-secondary text-white">Book List</p>
            <div class="container d-flex flex-row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1b14unh5d6w7g.cloudfront.net/1098748859.01.S001.LXXXXXXX.jpg?Expires=1684984061&Signature=XhX-SgmZY6IN3QaPIRnbVHoi-cqCeO5bxRGyY7FeOctCZK7ACA7I5dq4uFEq-4-cWgYk2TgTNAFFHeDtqeTl3AKr7MAucQwoOuTWih9v95dNR55YE2GvGMl~6m7Fkf5wG3WAcvrq1b5qJqaAJl~Asqr3bCCJkEDPwWvWpZ5RWU4_&Key-Pair-Id=APKAIUO27P366FGALUMQ" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://d1b14unh5d6w7g.cloudfront.net/1098748859.01.S001.LXXXXXXX.jpg?Expires=1684984061&Signature=XhX-SgmZY6IN3QaPIRnbVHoi-cqCeO5bxRGyY7FeOctCZK7ACA7I5dq4uFEq-4-cWgYk2TgTNAFFHeDtqeTl3AKr7MAucQwoOuTWih9v95dNR55YE2GvGMl~6m7Fkf5wG3WAcvrq1b5qJqaAJl~Asqr3bCCJkEDPwWvWpZ5RWU4_&Key-Pair-Id=APKAIUO27P366FGALUMQ" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://d1b14unh5d6w7g.cloudfront.net/1098748859.01.S001.LXXXXXXX.jpg?Expires=1684984061&Signature=XhX-SgmZY6IN3QaPIRnbVHoi-cqCeO5bxRGyY7FeOctCZK7ACA7I5dq4uFEq-4-cWgYk2TgTNAFFHeDtqeTl3AKr7MAucQwoOuTWih9v95dNR55YE2GvGMl~6m7Fkf5wG3WAcvrq1b5qJqaAJl~Asqr3bCCJkEDPwWvWpZ5RWU4_&Key-Pair-Id=APKAIUO27P366FGALUMQ" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>
            <div class="container d-flex flex-row justify-content-center bg-primary">
                <p class="h3 text-white">Happy book store 2022</p>
            </div>
        </div>
        
    </body>
</html>
