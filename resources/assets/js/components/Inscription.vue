<template>
    <ul class="list-group mb-3">
        <li v-if="valid=true" class="list-group-item d-flex justify-content-between">
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
          data: Object,
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
      valid: function () {
        return this.data['curp'] !== null;

        //return this.data.curp !== null

        /*return  this.data.name != null &&
          this.data.user.last_name != null &&
          this.data.user.email != null &&
          this.data.user.curp != null &&
          this.data.user.rfc != null &&
          this.data.user.homoclave != null &&
          this.data.user.calle != null &&
          this.data.user.colonia != null &&
          this.data.user.municipio != null &&
          this.data.user.entidad != null &&
          this.data.user.cp != null &&
          this.data.user.telefono != null &&
          this.data.user.titulo != null &&
          this.data.user.cedula != null &&
          this.data.user.institucion != null &&
          this.data.user.date_examen_profesional != null &&
          this.data.user.file_titulo != null &&
          this.data.user.file_cedula != null &&
          this.data.user.file_carta != null;*/
      }
    }
  }
</script>
