<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="brainrotsNumber"></h1>
    <input type="text" id="brainrotName" placeholder="Search your Brainrot">
    <br>
    <p id="results"></p>

    <h3 id="error" style="color: red"></h3>

    <script>
        const APIKEY = "kQM9J4VvmkOqiI65gNKf2d4Lb5JDqz5J"
        
        let title = document.querySelector("#brainrotsNumber");
        let input = document.querySelector("#brainrotName");
        let results = document.querySelector("#results");
        let error = document.querySelector("#error");

        function brainrotShower(value=""){
            fetch(`http://localhost/Brainrot/public_html/?name=${value}&apiKey=${APIKEY}`).then(r => r.json()).then(r => {
                results.innerHTML = ""
                error.innerHTML = "";
                title.innerHTML = "";
                
                if(r["success"]){
                    title.innerHTML = `Brianrot (${r["brainrots"].length})`
                    
                    r["brainrots"].forEach(k => {
                        results.innerHTML+= `
                        
                        <h1>${k["name"]}</h1>
                        <p>${k["description"]}</p>

                        <img src="./assets/img/${k["id"]}.webp" width=100 height=100>
                        <br>
                        <audio controls="">
                        <source src="./assets/sounds/${k["id"]}.mp3" type="audio/mpeg">
                        </audio>

                        <br><br><hr><br>
                        
                        `
                    })
                }

                else{
                    error.textContent = r["error"]
                }
            })
        }

        brainrotShower()

        input.addEventListener("input", e => brainrotShower(e.target.value))


    </script>
</body>
</html>