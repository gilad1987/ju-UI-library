/**
 * Created by giladtakoni on 04/04/2016.
 */

function gridGenerate(columns){
    var j=0;

    var column;
    var grid = document.getElementById('grid');

    function createCol(column_width,row){
        column = document.createElement('div');
        var class_name = 'ju-col-lg-'+column_width+'of24';
        column.innerText = '.'+class_name;
        column.classList.add(class_name);
        column.style.background = '#'+'0123456789abcdef'.split('').map(function(v,i,a){
                return i>5 ? null : a[Math.floor(Math.random()*16)] }).join('');
        row.appendChild(column);
    }

    function createRow(current){
        var row = document.createElement('div'),
            column_width = 24/current;

        row.classList.add('row');
        row.classList.add('lg-'+column_width+'of24');

        for(;j<current;j++){
            createCol(column_width,row);
        }
        grid.appendChild(row);
    }

    columns.forEach(createRow);


}

function onDOMLoad(e){
    var columns = [1,2,3,4,6,8,12,24];
    gridGenerate(columns);
}

document.addEventListener("DOMContentLoaded", onDOMLoad);