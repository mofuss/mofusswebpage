rm(list=ls(all=TRUE))
args=(commandArgs(TRUE))

if(length(args)==0){
print(0)
}else{
    for(i in 1:length(args)){
        eval(parse(text=args[[i]]))
        print(eval(parse(text=args[[i]])))
	#print(args[i])
    }
}

