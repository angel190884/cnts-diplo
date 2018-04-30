<template>
    <ul class="list-group mb-3">
        <li v-if="valid==true" class="list-group-item d-flex justify-content-between">
            <a href="/home" class="btn btn-block btn-success">ENVIAR SOLICITUD DE INSCRIPCIÓN</a>
        </li>
        <li v-else class="list-group-item d-flex justify-content-between">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar Datos</button>
        </li>
    </ul>
</template>

<script>
  export default {
    data () {
        return {
          data: Object
        }
    },
    created: function () {
      this.getData();
    },
    methods: {
      getData () {
        let urlData =  '/user_data';
        axios.get(urlData)
          .then
          (
            response =>
                {
                  this.data = response.data;
                }
          )
          .catch
          (

          )
      }
    },
    computed: {
      valid () {
        return  this.data.name != null &&
          this.data.last_name != null &&
          this.data.email != null &&
          this.data.curp != null &&
          this.data.rfc != null &&
          this.data.homoclave != null &&
          this.data.calle != null &&
          this.data.colonia != null &&
          this.data.municipio != null &&
          this.data.entidad != null &&
          this.data.cp != null &&
          this.data.telefono != null &&
          this.data.titulo != null &&
          this.data.cedula != null &&
          this.data.institucion != null &&
          this.data.date_examen_profesional != null &&
          this.data.file_titulo != null &&
          this.data.file_cedula != null &&
          this.data.file_carta != null;
      }
    }
  }
</script>
