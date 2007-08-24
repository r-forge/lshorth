plot.lshorth <- function(x, y, 
		probs=(1:psteps)/(psteps+1), 
		psteps=9,
		main="Shorth", xlab=NULL, 
		ylab=NULL,legend=TRUE, ...)
{
	lshorthx <- x #fix me
	shorthm <- t(lshorthx$lshorth)
	if (is.null(xlab)) {
        xlab <- x$xname
    }
	if (is.null(ylab)) {
		ylab <- "lshorth"
	}
	
	shorthl <-min (lshorth(x=lshorthx$x,0.5,plot=FALSE)$lshorth)# the length of the shorth
	shorthmy <- shorthm/shorthl
	ylim <- c(0,max(shorthmy)*1.1)
	if (is.na(ylim[2])) {
		ylim[2]<-0
	}
	shorthmy <- (max(shorthmy)-shorthmy)
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
