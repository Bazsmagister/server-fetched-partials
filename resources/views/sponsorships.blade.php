<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button onclick="fetchDevelopers()">Refresh</button>
    <ul id="js-developers-partial-target">
        {{-- @foreach ($users as $user)
        <li>
            {{$user}}
        <hr>
        </li>

        @endforeach --}}
    </ul>


    <script>
        function fetchDevelopers(){
        fetch('/partials/developers')
            .then(response => response.text())
            .then(html => {
                document.querySelector('#js-developers-partial-target').innerHTML =html

            })
        }



    fetchDevelopers()

            // # Fetch API
            // fetch(url)
            // .then((resp) => resp.json()) // Transform the data into json
            // .then(function(data) {
            // // Create and append the li's to the ul
            // })

                // OR

                // let fetchData = {
                // method: 'POST',
                // body: data,
                // headers: new Headers()
                // }

                // fetch(url, fetchData)
                // .then((resp) => resp.json())
                // .then(function(data) { })


    </script>

</body>

</html>
