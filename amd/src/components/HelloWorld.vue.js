import * as Str from 'core/str';

export default{
    name: 'HelloWorld',
    template: 
    `
        <h1>{{ text }}</h1>
    `,
    data() {
        return {
            text: ''
        };
    },
    beforeCreate() {
        Str.get_string('helloworld','local_corporatehierarchy')
        .then((string) => {
            this.text = string;
        });

        return true;
    }

};