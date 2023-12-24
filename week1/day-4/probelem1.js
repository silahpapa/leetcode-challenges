/**
 * @param {number[]} arr
 * @param {Function} fn
 * @return {number[]}
 */
var filter = function(arr, fn) {
    const new_arr = [];
    for(i=0; i <=arr.length; i++) {
        if(fn(arr[i],i)) {
            new_arr.push(arr[i])
        }
    }
    return new_arr;
};
