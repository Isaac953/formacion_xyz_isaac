<template lang="html">
      <div class="formacions">
        
        <div class="half">
          
          <h1>Create formacion</h1>
          
          <form @submit.prevent="createFormacion">
            
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
                <button class="button" type="submit" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Submit'}}</button>
            </div>
          </form>
          
        </div><!-- End first half -->
        
        <div class="half">
          
          <h1>List formacions</h1>
          
          <ul v-if="formacions.length > 0">
            <li v-for="(formacion,index) in formacions" :key="formacion.id">
              
            <router-link :to="'/formacion/'+formacion.id">
              
              formacion {{ index }}

              <button @click.prevent="deleteFormacion(formacion,index)" type="button" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
              
            </router-link>
              
            </li>
          </ul>
          
          <span v-else-if="!formacions">Loading...</span>
          <span v-else>No formacions exist</span>
          
        </div><!-- End 2nd half -->
        
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Formacion',
  components: {HasError},
  data: function(){
    return {
      formacions : false,
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
    this.listFormacions();
  },
  methods: {
    listFormacions: function(){
      
      var that = this;
      this.form.get('/api/formacions').then(function(response){
        that.formacions = response.data;
      })
      
    },
    createFormacion: function(){
      
      var that = this;
      this.form.post('/api/formacions').then(function(response){
        that.formacions.push(response.data);
      })
      
    },
    deleteFormacion: function(formacion, index){
      
      var that = this;
      this.form.delete('/api/formacions/'+formacion.id).then(function(response){
        that.formacions.splice(index,1);
      })
      
    }
  }
}
</script>

<style lang="less">
.formacions{
    margin:0 auto;
    width:700px;
    display:flex;
    .half{
      flex:1;
      &:first-of-type{
        margin-right:20px;
      }
    }
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
        .invalid-feedback{
          color:red;
          &::first-letter{
            text-transform:capitalize;
          }
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
    }
}
</style>