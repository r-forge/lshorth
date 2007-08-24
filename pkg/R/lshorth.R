`lshorth` <-
function (x, probs = NULL,  plot = TRUE) 
{
    if (!is.numeric(x)) 
        stop("'x' must be numeric")
	
    if (length(x)<1)
	    stop("'x' must have positive length")
	count <- length(x)
	# if (is.null(psteps)) {psteps <- 2*ceiling(log2(length(x))+1)}
	
		if (is.null(probs)){
			ppx <-ceiling(log2(count) / 2) 
			probs <- c( 1/2^(ppx:1),1-1/2^(2:ppx))
			}
	# if (is.null(probs)) {probs <- (1:psteps)/(psteps + 1)}
    
    xname <- paste(deparse(substitute(x), 500), collapse = "\n")
    shorthm <- matrix(ncol = length(probs), nrow = length(x))
    xsort <- sort(x)
   for (px in 1:length(probs)) {
        {
            
            if (probs[px] <= 1/count) {
                shorthvec <- rep.int(0, count)
            }
            else {
                jDelta <- ceiling(probs[px] * count) - 1
                 jmax <- count - jDelta
                lenvec <- xsort[-(1:(jDelta))] - xsort[-((count - 
                  jDelta + 1):count)]
                shorthvec <- vector(mode = "numeric", count)
                minlenj <- 1
                shorthvec[1] <- minlen <- lenvec[1]
                for (i in 2:count) {
                  jmin <- i - jDelta
                  if (jmin < 1) {
                    jmin <- 1
                  }
                  if (i + jDelta > count) {
                    minlenj <- jmin - 1 + which.min(lenvec[jmin:(count - 
                      jDelta)])
                  }
                  else {
                    if (minlenj < jmin) {
                      minlenj <- jmin - 1 + which.min(lenvec[jmin:i])
                    }
                    else {
                      if (lenvec[i] < minlen) {
                        minlenj <- i
                      }
                    }
                  }
                  shorthvec[i] <- minlen <- lenvec[minlenj]
                }
            }
            shorthm[, px] <- shorthvec
        }
    }
    shorthm <- structure(list(x = xsort, lshorth = -shorthm, 
        probs = probs), class = "lshorth")
    if (plot) {
        plot(shorthm, probs=probs, xlab = xname, ylab = "Std Shorth")
    }
    invisible(shorthm)
}
