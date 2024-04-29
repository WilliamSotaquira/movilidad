class CybeCard extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
        this.render();
    }

    get styles() {
        return /*css*/ `
                .container {
                    background-color: #f1f1f1;
                    border: 1px solid #d3d3d3;
                    padding: 10px;
                    margin: 10px 0;
                    border-radius: 5px;
                }
        `;
    }

    render() {
        this.shadowRoot.innerHTML = /*html*/ `
            <style>${this.styles}</style>
            <div class="container">
            <p>Hola <strong>a todos</strong></p>
            </div>`;
    }
}

customElements.define("cybe-card", CybeCard);
