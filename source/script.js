window.onload = async () => {


    async function getRecetas() {
        const url = 'https://chinese-food-db.p.rapidapi.com/';
        const options = {
            method: 'GET',
            headers: {
                'x-rapidapi-key': '33ddd42f3dmsh347a4f5e624187ap176703jsn3d48ceb3c2b9',
                'x-rapidapi-host': 'chinese-food-db.p.rapidapi.com'
            }
        };

        try {
            const response = await fetch(url, options);
            const result = await response.json();
            console.log(result);
            return result;
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    let trArray;
    async function mostrarRecetas() {
        const result = await getRecetas();
        console.log(result);
        let text_HTML = `
            <h2 class='text-center'>Mis Recetas</h2>
            <hr></hr>
                <div class='table-responsive small'>
                    <table class='table table-striped table-sm w-50 mx-auto text-center'>
                        <thead>
                            <tr>
                                <th scope='col'>Titulo</th>
                                <th scope='col'>Dificultad</th>
                                <th scope='col'>Imagen</th>
                                <th scope='col'>Guardar</th>
                            </tr>
                        </thead>
                        <tbody>
        `;
        for(const receta of result) {
            text_HTML += `<tr>`;
            text_HTML += `<td id="titulo" class="w-25 align-middle fw-bold">${receta.title}</td>`;
            text_HTML += `<td id="dificultad" class="w-25 align-middle">${receta.difficulty}</td>`;
            text_HTML += `<td id="imagen" class="w-25 align-middle"><img src='${receta.image}' alt='Imagen de la receta' class='img-fluid' style='width: 100px;'></td>`;
            text_HTML += `<td class="w-25 align-middle">
                    <a class='btn btn-primary' type='button' 
                    href="index.php?accion=guardarReceta&titulo=${receta.title}&dificultad=${receta.difficulty}&imagen=${receta.image}">
                    Guardar</a>
                        </td>`;
            text_HTML += `</tr>`;
        }
        text_HTML += `</tbody></table></div>`;
        document.getElementById("principal").innerHTML = text_HTML;
        trArray = document.querySelectorAll("tr");
    }
    mostrarRecetas();
}