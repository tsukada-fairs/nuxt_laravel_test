export const state = () => ({
  data: []
})

export const mutations = {
  setData (state, data) {
    state.data = data
  }
}

export const actions = {
  async getInterviewSheet ({ commit }) {
    await this.$axios
        .$get("/api/interview")
        .then(response => {
          commit("setData", response);
        });
  }
}