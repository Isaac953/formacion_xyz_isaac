<template lang="html">
      <div class="FormacionSingle">
        <h1>Update Formacion</h1>
        
        <form @submit.prevent="updateFormacion" v-if="loaded">
          
          <router-link to="/formacions">< Back to formacions</router-link>
          
            <div class="form-group">
   
                  <input type="hidden" v-model="form.id"></input>
            </div>
            <div class="form-group">
                  <label>nombre</label>
                  <input type="text" v-model="form.nombre"  maxlength="200" ></input>
                  <has-error :form="form" field="nombre"></has-error>
            </div>
            <div class="form-group">
                  <label>descripcion</label>
                  <input type="text" v-model="form.descripcion"  maxlength="500" ></input>
                  <has-error :form="form" field="descripcion"></has-error>
            </div>
            <div class="form-group">
                  <label>fecha_inicio</label>
                  <input type="number" v-model="form.fecha_inicio"></input>
                  <has-error :form="form" field="fecha_inicio"></has-error>
            </div>
            <div class="form-group">
                  <label>fecha_fin</label>
                  <input type="number" v-model="form.fecha_fin"></input>
                  <has-error :form="form" field="fecha_fin"></has-error>
            </div>
            <div class="form-group">
                  <label>ubicacion</label>
                  <input type="text" v-model="form.ubicacion"  maxlength="200" ></input>
                  <has-error :form="form" field="ubicacion"></has-error>
            </div>
            <div class="form-group">
                  <label>departamento</label>
                  <input type="text" v-model="form.departamento"  maxlength="200" ></input>
                  <has-error :form="form" field="departamento"></has-error>
            </div>
            <div class="form-group">
                  <label>municipio</label>
                  <input type="text" v-model="form.municipio"  maxlength="200" ></input>
                  <has-error :form="form" field="municipio"></has-error>
            </div>
            <div class="form-group">
                  <label>horas_curso</label>
                  <input type="number" v-model="form.horas_curso"></input>
                  <has-error :form="form" field="horas_curso"></has-error>
            </div>
            <div class="form-group">
                  <label>modalidad</label>
                  <input type="text" v-model="form.modalidad"  maxlength="200" ></input>
                  <has-error :form="form" field="modalidad"></has-error>
            </div>
            <div class="form-group">
                  <label>tipo_costo</label>
                  <input type="text" v-model="form.tipo_costo"  maxlength="200" ></input>
                  <has-error :form="form" field="tipo_costo"></has-error>
            </div>
            <div class="form-group">
                  <label>costo</label>
                  <input type="number" v-model="form.costo"></input>
                  <has-error :form="form" field="costo"></has-error>
            </div>
            <div class="form-group">
                  <label>n_participantes</label>
                  <input type="number" v-model="form.n_participantes"></input>
                  <has-error :form="form" field="n_participantes"></has-error>
            </div>
            <div class="form-group">
                  <label>cant_evaluaciones</label>
                  <input type="number" v-model="form.cant_evaluaciones"></input>
                  <has-error :form="form" field="cant_evaluaciones"></has-error>
            </div>
            <div class="form-group">
                  <label>contrato</label>
                  <input type="number" v-model="form.contrato"></input>
                  <has-error :form="form" field="contrato"></has-error>
            </div>
            <div class="form-group">
                  <label>orden_compra</label>
                  <input type="number" v-model="form.orden_compra"></input>
                  <has-error :form="form" field="orden_compra"></has-error>
            </div>
            <div class="form-group">
                  <label>compra_bolsa</label>
                  <input type="number" v-model="form.compra_bolsa"></input>
                  <has-error :form="form" field="compra_bolsa"></has-error>
            </div>
            <div class="form-group">
                  <label>item</label>
                  <input type="number" v-model="form.item"></input>
                  <has-error :form="form" field="item"></has-error>
            </div>
            <div class="form-group">
                  <label>programa</label>
                  <input type="text" v-model="form.programa"  maxlength="200" ></input>
                  <has-error :form="form" field="programa"></has-error>
            </div>
            <div class="form-group">
                  <label>facilitador</label>
                  <input type="text" v-model="form.facilitador"  maxlength="200" ></input>
                  <has-error :form="form" field="facilitador"></has-error>
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.created_at"></input>
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.updated_at"></input>
            </div>
      
          <div class="form-group">
              <button class="button" type="submit" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Update'}}</button>
              <button @click.prevent="deleteFormacion">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
          </div>
        </form>
        
        <span v-else>Loading formacion...</span>
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Formacion',
  components: {HasError},
  data: function(){
    return {
      loaded: false,
      form: new Form({
          "id" : "",
          "nombre" : "",
          "descripcion" : "",
          "fecha_inicio" : "",
          "fecha_fin" : "",
          "ubicacion" : "",
          "departamento" : "",
          "municipio" : "",
          "horas_curso" : "",
          "modalidad" : "",
          "tipo_costo" : "",
          "costo" : "",
          "n_participantes" : "",
          "cant_evaluaciones" : "",
          "contrato" : "",
          "orden_compra" : "",
          "compra_bolsa" : "",
          "item" : "",
          "programa" : "",
          "facilitador" : "",
          "created_at" : "",
          "updated_at" : "",
        
      })
    }
  },
  created: function(){
    this.getFormacion();
  },
  methods: {
    getFormacion: function(Formacion){
      
      var that = this;
      this.form.get('/api/formacions/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.loaded = true;
      }).catch(function(e){
          if (e.response && e.response.status == 404) {
              that.$router.push('/404');
          }
      });
      
    },
    updateFormacion: function(){
      
      var that = this;
      this.form.put('/api/formacions/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
      })
      
    },
    deleteFormacion: function(){
      
      var that = this;
      this.form.delete('/api/formacions/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.$router.push('/formacions');
      })
      
    }
  }
}
</script>

<style lang="less">
.FormacionSingle{
  margin:0 auto;
  width:700px;
  form{
    .form-group{
      margin-bottom:20px;
      label{
        display:block;
        margin-bottom:5px;
        text-transform: capitalize;
      }
      input[type="text"],input[type="number"],textarea{
        width:100%;
        max-width:100%;
        min-width:100%;
        padding:10px;
        border-radius:3px;
        border:1px solid silver;
        font-size:1rem;
        &:focus{
          outline:0;
          border-color:blue;
        }
      }
      .button{
        appearance: none;
        background: #3bdfd9;
        font-size: 1rem;
        border: 0px;
        padding: 10px 20px;
        border-radius: 3px;
        font-weight: bold;
        &:hover{
          cursor:pointer;
          background: darken(#3bdfd9,10);
        }
      }
      .invalid-feedback{
        color:red;
        &::first-letter{
          text-transform:capitalize;
        }
      }
    }
  }
}
</style>