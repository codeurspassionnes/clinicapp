<template>
    <div class="container" style="height: 100vh">
        <div class="row h-100">
            <div class="col my-auto" style="width: 700px; height: 700px;">
                <div class="card h-100">
                    <div class="card-header">
                        <h1 class="card-title">Configuration de clinic App</h1>
                    </div>
                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-default">Précédent</button>
                            <button class="btn btn-primary">Suivant</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
const props = defineProps({
    username: String
})
</script>