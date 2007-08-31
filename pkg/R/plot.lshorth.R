plot.lshorth <- function(x, y, xlim = NULL, ylim = NULL,
		probs=NULL, 
		main="Shorth", 
		xlab=NULL, 
		ylab=NULL,
		legend=TRUE, rescale="std", ...)
{
	stopifnot(inherits(x,"lshorth"))
	if (missing(ylim))  ylim <-NULL
	lshorthx <- x #fix me
	probs <- lshorthx$probs
	shorthm <- t(lshorthx$lshorth)
	if (is.null(xlab)) {
		if (!is.null(x$xname)){
            xlab <- paste(x$xname,", n=",length(lshorthx$x), sep="")
        } else{xlab <- paste(deparse(substitute(x), 50), 
        	", n=",length(lshorthx$x), collapse = "\n", sep="")}
        
    }
	if (is.null(rescale)) rsc <- "none" else{
	rsc<-match.arg(tolower(rescale),c("none","std","inv","neg"))
	}
	if (rsc=="std"){
		
	    shorthl <-min (lshorth(x=lshorthx$x,0.5,plot=FALSE)$lshorth)
	    # the length of the shorth
	    shorthmy <- shorthm/shorthl
	    
	    if (is.null(ylab)) {
		    ylab <- "std lshorth"
		    if(is.null(ylim)){
	ylim <- c(max(shorthmy)*1.1,0)
	if (is.na(ylim[2])) {
		ylim[2]<-0
	}}
	    }
	 }
     if (rsc=="inv") {
        shorthmy<- 1/shorthm
		if (is.null(ylab)) {
		    ylab <- "1/lshorth"
	    }
	    if (is.null(ylim)) {ylim<-1.1*range(shorthmy,finite=TRUE);ylim[1]<-0}
	 }
	 if (rsc=="neg") {
        shorthmy<- shorthm
		if (is.null(ylab)) {
		    ylab <- "lshorth"
	    }
	    if (is.null(ylim)){ylim<-c(1.1*range(shorthmy,finite=TRUE)[2],0)}
	 }

     if (rsc=="none") {
     	shorthmy<- shorthm
		if (is.null(ylab)) {
		    ylab <- "lshorth"
	    }
	    if (is.null(ylim)) {ylim<-range(shorthmy,finite=TRUE);ylim[1]<-0}
    }

	if (is.null(ylab)) {
		ylab <- "lshorth"
	}

	if (is.null(ylim)) ylim<-range(shorthmy,finite=TRUE)
	plot.new()
	plot.window(xlim=range(lshorthx$x[is.finite(lshorthx$x)]),ylim=ylim, ...)
	axis(1)
	axis(2)
	title(main=main, xlab=xlab, ylab=ylab,)
	rug(lshorthx$x)
	
	lwd <- ceiling(6*(0.5-abs(probs-0.5)))
	
	for (px in 1:length(probs)){
	#	lwd <- ceiling(6*(0.5-abs(probs[px]-0.5)))
		lines(lshorthx$x,shorthmy[px,],lwd=lwd[px])
	}
	if (legend){
	temp <- legend("topright", legend = rep(" ",length(probs)),
               text.width = strwidth("1,000,000"),
               lwd = lwd, xjust = 1, yjust = 1,
               title = "Coverage")
	text(temp$rect$left + temp$rect$w, temp$text$y,
     format(probs,digits=3), pos=2)
	}
	invisible(shorthm)
}

