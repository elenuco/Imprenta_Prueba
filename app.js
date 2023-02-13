const urlBase = 'Http://localhost/imprentaprueba/API/';
const obtenerCard = () => {
    axios.get('${urlBase}Trello_Api.php')
        .then(respuesta => console.log(respuesta.data))
        .catch(error => console.log(error))
}
get()