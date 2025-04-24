<template>
    <div class="container" style="height: 100vh">
        <div class="row h-100">
            <div class="col my-auto" style="width: 700px; height: 700px">
                <div class="card h-100">
                    <div class="card-header">
                        <h1 class="card-title">Configuration de clinic App</h1>
                    </div>
                    <div class="card-body">
                        <div class="stepper-items">
                            <div class="stepper-item active">1</div>
                            <div class="progress line">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: 25%"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="stepper-item">2</div>
                            <div class="progress line">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="stepper-item">3</div>
                        </div>
                        <div class="stepper-forms"></div>
                    </div>
                    <div class="card-footer">
                        <div
                            class="d-flex justify-content-between align-items-center"
                        >
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
    username: String,
});
</script>

<style scoped>
.stepper-items {
    display: flex;
    gap: 16px;
    align-items: center;
}
.stepper-items .stepper-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.1em;
    color: rgba(13, 12, 12, 0.829);
    background-color: transparent;
    border: 2px solid rgb(233, 236, 239);
}
.stepper-item.active {
    color: white;
    background-color: #007bff;
    border: none;
    box-shadow: 0 0 0 5px white, 0 0 0 7px #007bff;
}
.stepper-items .line {
    flex: 1;
}
.progress-bar,
.progress {
    height: 5px;
}
</style>
