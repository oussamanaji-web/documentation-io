<template>
    <div v-if="userAdmin !== 'admin'">
        <h5>{{ documentation.apiName }}</h5>
        <p>Description : <br>{{ documentation.apiDescription }}</p>
        <p>Url :
            <a :href="documentation.url">{{ documentation.url }}</a>
        </p>
        <p>Méthode : {{ documentation.apiMethode }}</p>
        <p>Paramètre : {{ documentation.apiParamètre }}</p>

    </div>
    <div v-else>
        <h3>Formulaire</h3>
        <form v-on:submit.prevent="submitForm" class="mt-4">
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" v-model="form.url"
                       placeholder="URL">
            </div>
            <div class="mb-3">
                <label for="methode" class="form-label">Méthode</label>
                <select v-model="form.apiMethode" class="form-select" id="methode">
                    <option selected>Choisir une méthode</option>
                    <option value="http">Méthode HTTP</option>
                    <option value="get">Méthode GET</option>
                    <option value="post">Méthode POST</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="params" class="form-label">Paramètre</label>
                <input type="text" class="form-control" id="params"
                       v-model="form.apiParamètre" placeholder="Paramètre">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nom de l'API</label>
                <input type="text" class="form-control" id="name" v-model="form.apiName"
                       placeholder="Nom">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Description</label>
                <textarea class="form-control" v-model="form.apiDescription" id="content" placeholder="Description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="reset" class="btn btn-soft-primary me-2">Annuler</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        <transition name="slide-fade">
            <div class="alert alert-success alert-dismissible fade show pe-5 mt-3" role="alert" v-if="status">
                Enregistré 👍
                <button type="button" class="close p-2" data-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.528" height="12" viewBox="0 0 11.528 12">
                        <path
                            d="M.788.1l.055.05,4.92,5.122L10.684.151a.48.48,0,0,1,.7,0,.53.53,0,0,1,.048.67l-.048.058L6.463,6l4.92,5.122a.529.529,0,0,1,0,.727.48.48,0,0,1-.643.05l-.055-.05L5.764,6.728.843,11.849a.48.48,0,0,1-.7,0A.53.53,0,0,1,.1,11.18l.048-.058L5.065,6,.145.878a.529.529,0,0,1,0-.727A.48.48,0,0,1,.721.057Z"
                            fill="#fff"/>
                    </svg>
                </button>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "API",
    props: {
        userAdmin: null,
        documentation: null,
    },
    data() {
        return {
            form: {
                url: this.documentation.url,
                apiMethode: this.documentation.apiMethode,
                apiParamètre: this.documentation.apiParamètre,
                apiName: this.documentation.apiName,
                apiDescription: this.documentation.apiDescription,
            },
            status: false,
        }
    },
    methods : {
        submitForm() {
            axios.post(`/api/submit/documentation/${this.documentation.id}`, this.form)
                .then((response) => {
                    if(response.status === 200){
                        this.status = response.data.status;
                        setTimeout(() => {
                            this.status = false;
                        }, 1500)
                    }
                })
        }
    }
}
</script>

<style scoped>
.form-control {
    font-size: 16px;
}
.slide-fade-enter-active {
    transition: all .3s ease;
}
.slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active below version 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}
</style>
