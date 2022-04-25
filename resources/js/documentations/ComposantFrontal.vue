<template>
    <div>
        <h3>Formulaire</h3>
        <form v-on:submit.prevent="submitForm" class="mt-4">
            <div class="mb-3">
                <label for="frontTitle" class="form-label">Titre</label>
                <input type="text" v-model="form.frontTitle" class="form-control" id="frontTitle"
                       placeholder="Titre">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" v-model="form.frontDescription" id="Description"
                          placeholder="Description"
                          rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="frontSourceCodeHtml" class="form-label">Code Source (HTML)</label>
                <textarea class="form-control" v-model="form.frontSourceCodeHtml" id="frontSourceCodeHtml"
                          placeholder="Code Source (HTML)"
                          rows="6"></textarea>
            </div>
            <code-highlight language="html">{{ form.frontSourceCodeHtml }}</code-highlight>

            <div class="mb-3">
                <label for="frontSourceCodeJs" class="form-label">Code Source (JS)</label>
                <textarea class="form-control" v-model="form.frontSourceCodeJs" id="frontSourceCodeJs"
                          placeholder="Code Source (JS)"
                          rows="6"></textarea>
            </div>
            <code-highlight language="javascript">{{ form.frontSourceCodeJs }}</code-highlight>
            <div class="mb-3">
                <div style="background-color: rgba(166,251,166,0.40); padding: 15px; border-radius: 5px"
                     v-html="form.frontSourceCodeHtml + form.frontSourceCodeJs"></div>
            </div>
            <div class="mb-3">
                <label for="edition" class="form-label">Édition</label>
                <input type="text" v-model="form.frontEdition" class="form-control" id="edition"
                       placeholder="Édition">
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
import CodeHighlight from "vue-code-highlight/src/CodeHighlight.vue";
import "vue-code-highlight/themes/duotone-sea.css";
import "vue-code-highlight/themes/window.css";

export default {
    name: "ComposantFrontal",
    props: {
        documentation: null,
    },
    components: {
        CodeHighlight,
    },
    data() {
        return {
            form: {
                frontTitle: this.documentation.frontTitle,
                frontDescription: this.documentation.frontDescription,
                frontSourceCodeHtml: this.documentation.frontSourceCodeHtml,
                frontSourceCodeJs: this.documentation.frontSourceCodeJs,
                frontEdition: this.documentation.frontEdition,
            },
            status: false,
        }
    },
    methods: {
        submitForm() {
            axios.post(`/api/submit/documentation/${this.documentation.id}`, this.form)
                .then((response) => {
                    if (response.status === 200) {
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
    /* .slide-fade-leave-active below version 2.1.8 */
{
    transform: translateX(10px);
    opacity: 0;
}
</style>
