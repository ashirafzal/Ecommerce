<template>
    <div class="container">
        <h1 class="text-primary text-center">Report Error</h1>
        <br>
        <form class="border" @submit.prevent="submit">
            <div v-if="success" class="alert alert-success mt-3">
                Thanks for reporting the bug! We will contact you soon if we need more details.
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    v-model="fields.name"
                />
                <div v-if="errors && errors.name" class="text-danger">
                    {{ errors.name[0] }}
                </div>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    v-model="fields.email"
                />
                <div v-if="errors && errors.email" class="text-danger">
                    {{ errors.email[0] }}
                </div>
            </div>
            
             <div class="form-group">
                <label for="email">Subject</label>
                <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    v-model="fields.subject"
                />
                <div v-if="errors && errors.subject" class="text-danger">
                    {{ errors.subject[0] }}
                </div>
            </div>

            <div class="form-group">
                <label for="error">Error Details</label>
                <textarea
                    class="form-control"
                    id="error"
                    name="error"
                    rows="5"
                    v-model="fields.error"
                ></textarea>
                <div v-if="errors && errors.error" class="text-danger">
                    {{ errors.error[0] }}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Send Error Detail</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            loaded: true
        };
    },
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios
                    .post("/error-report-vue", this.fields)
                    .then(response => {
                        this.fields = {}; //Clear input fields.
                        this.loaded = true;
                        this.success = true;
                    })
                    .catch(error => {
                        this.loaded = true;
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            }
        }
    }
};
</script>
