<template>
  <section id="contacts">
    <section id="form">
      <h1>Contattaci</h1>
      <Alert
        v-if="hasErrors || alertMessage"
        :type="hasErrors ? 'danger' : 'success'"
      >
        <div v-if="alertMessage">{{ alertMessage }}</div>
        <ul v-if="hasErrors">
          <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
      </Alert>
      <Loader v-if="isLoading" />
      <div class="row d-flex">
        <div class="col-8">
          <div class="form-group">
            <div>
              <label for="message">Inserisci qui il tuo messaggio: </label>
            </div>
            <div>
              <textarea
                v-model.trim="form.message"
                class="form-control shadow-sm"
                id="message"
                rows="5"
              ></textarea>
              <small class="form-text text-muted"
                >Scrivi il testo del tuo messaggio. Un amministratore ti
                risponderà appena possibile.</small
              >
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <div>
              <label for="email" class="mb-3 mr-3"
                >Inserisci la tua email:</label
              >
            </div>
            <div>
              <input
                v-model.trim="form.email"
                type="email"
                class="form-control shadow-sm"
                id="email"
                placeholder="nome@esempio.com"
              />
              <small class="form-text text-muted"
                >Inserisci qui la tua email. Non condivideremo la tua email con
                nessuno. Verrà utilizzata per ricontattarti.</small
              >
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-success w-100 shadow-sm" @click="sendForm()">
              Invia
            </button>
          </div>
        </div>
      </div>
    </section>

    <hr />

    <div class="card mt-5 shadow-sm">
      <div
        class="
          card-header
          d-flex
          justify-content-between
          align-items-center
          py-3
        "
      >
        <div class="h4 pt-3">
          <div>Nome Azienda:</div>
          <div>
            <strong>{{ title }}</strong>
          </div>
        </div>
        <div>
          <img
            src="https://www.freepngdesign.com/content/uploads/images/3d-letter-b-6679.png"
            width="100"
            class="img-fluid"
            alt="Boolpress"
          />
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h6 class="card-subtitle my-2 text-muted">Boolpress - Web</h6>
        </li>
        <li class="list-group-item">
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem eligendi, expedita veritatis doloribus, reprehenderit
            perspiciatis cum quisquam ullam incidunt commodi repudiandae quidem
            consequuntur porro, aliquam tempore quibusdam? Asperiores, aperiam
            molestiae? Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Corrupti asperiores laborum doloremque, perferendis aliquam commodi
            voluptates incidunt. Placeat dignissimos maxime saepe eius quos
            perspiciatis. Eos quis hic blanditiis sequi quidem. Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Perferendis, alias quam
            sapiente exercitationem at saepe animi veniam natus cupiditate amet
            id laboriosam quia est eius dolorum, dicta molestiae eos
            consectetur!
          </p>
        </li>
        <li class="list-group-item">
          <address class="my-2">
            Phone Number: <strong>+39 3899403321</strong>
          </address>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import Loader from "../Loader.vue";
import Alert from "../Alert.vue";
import { isEmpty } from "lodash";
export default {
  name: "ContactPage",
  components: {
    Loader,
    Alert,
  },
  data() {
    return {
      title: "Boolpress",
      errors: {},
      isLoading: false,
      alertMessage: "",
      form: {
        email: "",
        message: "",
      },
    };
  },
  computed: {
    hasErrors() {
      return !isEmpty(this.errors);
    },
  },
  methods: {
    validateForm() {
      // #validation
      const errors = {};
      if (!this.form.email.trim()) errors.email = "L'email è obbligatoria";
      if (!this.form.message.trim())
        errors.message = "Il testo del messaggio è obbligatorio";

      // controllo che sia una Mail valida
      if (
        this.form.email.trim() &&
        !this.form.email.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)
      )
        errors.email = "La mail non è valida.";
      this.errors = errors;
    },
    sendForm() {
      // Valido i campi
      this.validateForm();

      // Invio il form solo se non ci sono errori
      if (!this.hasErrors) {
        this.isLoading = true;
        axios
          .post("http://localhost:8000/api/messages", this.form)
          .then((res) => {
            if (res.data.errors) {
              const { email, message } = res.data.errors;
              const errors = {};
              if (email) errors.email = email[0];
              if (message) errors.message = message[0];
              this.errors = errors;
            } else {
              this.form.email = "";
              this.form.message = "";
              this.alertMessage = "Messaggio inviato con successo";
            }
          })
          .catch((err) => {
            console.error(err);
            this.errors = { error: "Si è verificato un errore" };
          })
          .then(() => {
            this.isLoading = false;
          });
      }
    },
  },
};
</script>*/

<style>
</style>