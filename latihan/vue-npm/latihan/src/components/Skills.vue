<template>
  <div class="hello">
      <!-- <div class="holder"> -->

        
        {{name}}
        {{btnState ? 'tombol di block' : 'tombol tidak di block'}}
        <button v-on:click="changeName" v-bind:disabled="btnState">Change Name </button>
  
        <li v-for="(data,index) in kemampuan" :key='index'>{{index}}. {{data.jurus}} </li>
        <input type="text" placeholder="isi masbro" v-model="jurus" >
        {{ jurus }}
     <!-- </div> -->
 </div>
</template>

<script>
export default {
  name: 'Skills',
  data(){
      return {
          jurus : '',
          kemampuan:[
              {"jurus" : "penakluk"},
              {"jurus" : "pematuk"},
              {"jurus" : "wkwkwk"}
          ]
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    input{
        width: calc(100% - 40px);
        border: 0;
        padding: 20px;
        font-size: 1.3em;
        background-color: #323333;
        color: #687f7f;
    }
</style>
