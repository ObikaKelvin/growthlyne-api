class Form{

    /**
     * initialize form instance
     * @since 1.0.0
     * @return void
     */

    init():void{
        this.setupEventListeners();
    }

    /**
     * setup all form event listeners
     * @since 1.0.0
     * @return void
     */
    setupEventListeners():void{

        document.addEventListener("click", e => {
            this.closeAll(e.target);
        });

        document.querySelectorAll('.form__select--input').forEach(elm => {
            elm.addEventListener('click', (e) => this.displaySelectOptions(e));
        });

        document.querySelectorAll('.form__options--item').forEach(elm => {
            elm.addEventListener('click', e => this.selectItem(e));
        });

    }

    /**
     * close all select elements except the current select element
     * @since 1.0.0
     * @return void
     */

    closeAll(node: any):void{
        document.querySelectorAll('.form__select').forEach(element => {
           
            if(element !== node){
                element.children[2].classList.remove('form__options--item__visible')
            }
        });
    }

    /**
     * Display the select element options when clicked
     * @since 1.0.0
     * @return void
     */

    displaySelectOptions(e: Event):void{
        e.stopPropagation();
        
        //get the element that triggered this event
        const target = ( <HTMLElement>e.target);
        
        //close all select fields expect the current one if it is a select field element
        this.closeAll(target?.parentNode);
        
        //get the options of the select field
        const options = target?.parentNode?.children[2];

        //Either add or remove the active class depending o its previous state
        options?.classList.toggle('form__options--item__visible')
    }

    /**
     * select option items when clicked
     * The input element under the parent select div has it's value set to the current option
     * @since 1.0.0
     * @return void
     */

    selectItem(e: Event):void{
        e.stopPropagation();

        //get the element that triggered this event
        const target = ( <HTMLElement>e.target);

        
        //get the input element of the current select element
        const options = target?.parentNode?.parentNode;
        let input = options?.parentNode?.children[0] as HTMLInputElement;

        //get the list of all options of the current select element
        const optionsList = options?.children[0];
        
        //get the value of the option that was selected via the data-key attribute
        let key:any;
        key = target?.getAttribute('data-key');

        //assign the its value to the input element of the current select element
        input.value = target?.textContent as string;

        //remove the active class from options except the currently selected option
        for (let index = 0; index < ( <HTMLElement>optionsList ).children.length; index++) {

            if(index !== key){
                ( <HTMLElement>optionsList ).children[index].classList.remove('form__options--item__active');
            }
        }

        //add the active class to the selected option
        target?.classList?.add('form__options--item__active');

        //hide the options list
        ( <HTMLElement>options)?.classList?.remove('form__options--item__visible')

    }

}

export default Form;