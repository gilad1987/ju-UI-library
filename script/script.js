/**
 * Created by giladtakoni on 04/04/2016.
 */

function gridGenerate(columns,sum_column){

    var grid = document.getElementById('grid');

    function addBackground(element){
        return element.style.background = '#'+'0123456789abcdef'.split('').map(function(v,i,a){
                return i>5 ? null : a[Math.floor(Math.random()*16)] }).join('');
    }
    function createCol(column_width,row){
        var column = document.createElement('div');
        var class_name = 'ju-col-lg-'+column_width+'of'+sum_column;
        column.innerText = '.'+class_name;
        column.classList.add(class_name);
        addBackground(column);
        row.appendChild(column);
    }

    function createRow(current){
        var row = document.createElement('div'),
            column_width = sum_column/current;

        row.classList.add('row');
        row.classList.add('lg-'+column_width+'of'+sum_column);

        for(j=0;j<current;j++){
            createCol(column_width,row);
        }
        grid.appendChild(row);
    }

    columns.forEach(createRow);


}

function onDOMLoad(e){
    var columns = [1,2,3,4,6,8,12,24];
    gridGenerate(columns,24);
    gridGenerate([9],9);
}

document.addEventListener("DOMContentLoaded", onDOMLoad);