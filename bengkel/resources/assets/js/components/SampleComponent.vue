<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-black bg-primary mb-3">
                    <div class="card-header"><h2>Sample Component</h2></div>
                        <div class="card text-black bg-light mb-3">
                            Sample Hello {{ judul }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!-- console log = untuk hasil respon pesan lewat inspecte elemen web browser -->
<script>
    export default {
        mounted() {
            console.log('Sample Component mounted.')
        },
        data(){
            return{
                judul: "Service Motor"
            }
        }
    }
</script>
<style type="text/css" scoped>
    h2{
        color: rgb(0, 0, 0);
    }
</style>
